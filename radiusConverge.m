function [radius,costheta,nature]=radiusConverge(a)
% Estimate radius of convergence of a real-valued Taylor
% series from its coefficients when convergence is limited
% by either a real singularity or a complex conjugate pair
% of singularities.  Also estimate the location and nature
% of the singularities given they are of form [z-r]^nature
% or [z-r*exp(i*theta)]^nature.  See Appendix of the article
% by Mercer & Roberts (1990) "A centre manifold description
% of contaminant dispersion in channels with varying flow
% properties"; SIAM J. Appl. Math. 50, pp. 1547--1565; doi:
% 10.1137/0150091.  With more coding could generalise to a
% set of Taylor series stored in a 2D array.  The nature is
% usually OKish to one decimal place, but sometimes worse!
% AJR, 4 Jul 2019
if nargin==0, 
	% example from homogenisation of 1-3, period two, diffusion
    a=[0
	 1.5
	0.21875
	-0.0153645833333
	0.0045421781994
	-0.000651425962095
	-0.0000272110973736
	0.000063417140204
	-0.0000273721164496
	0.00000743165092989
	-0.00000106850673296
	-0.000000187313165366
	0.000000198540049063
	-0.0000000807784048915
	0.0000000204494522624
	-0.00000000196514393034
	-0.00000000116638473277
	0.000000000813994589664
	-0.000000000295281424719
	0.0000000000643029608275
	-8.5057969996e-13];
end; % of example data

% force coefficients to column(s)
if size(a,1)==1, a=a(:); end 
n=size(a,1);
if n<4, error('must have four+ coefficients'), end

% scale coefficients to be comparable magnitude
m=floor(n/2);
rat=( max(abs(a(1:m,:))) ./ max(abs(a(m+1:n,:))) ).^(1/m);
a=a.*(rat.^((0:n-1)'));

% check for whether function of squared parameter
near0=1e-8*max(abs(a));
if max(abs(a(1:2:n)))<near0,
   fprintf('radiusConverge: odd coeffs effectively zero\n')
   [radius,costheta,nature]=radiusConverge(a(2:2:end));
   radius=rat*sqrt(radius)
   return
end
if max(abs(a(2:2:n)))<near0,
   fprintf('radiusConverge: even coeffs effectively zero\n')
   [radius,costheta,nature]=radiusConverge(a(1:2:end));
   radius=rat*sqrt(radius)
   return
end

% Now test for same or alternating signs
% If so, then use a simpler Domb-Sykes plot.
% Omit leading departure from pattern in up to first 25% of coeffs
for kMin=1:n/4 %min(find(abs(a)>near0));
	pm=(-1).^(kMin:n)';
	if prod(a(kMin:n)>near0)+prod(a(kMin:n)<-near0) ...
	   +prod(pm.*a(kMin:n)>near0)+prod(pm.*a(kMin:n)<-near0)>0
	   fprintf('radiusConverge: Domb--Sykes plot\n')
	   k=(kMin:n-1)';
	   Bk=a(k+1)./a(k);
	   b=(k.^2.*[ones(size(k)) 1./k])\(k.^2.*Bk);
	   radius = rat/b(1);
	   nature = -1-b(2)/b(1) % unreliable?
	   costheta = sign(radius)
	   radius = abs(radius);
	   % plot in current figure window
	   clf()
	   x=[1./k;0];
	   plot(1./k,real(Bk),'o:',x,b(1)+b(2)*x)
	   xlabel('1/k'),ylabel('rat/radius')
	   return
	end
end%for-loop

% With a nontrivial pattern of signs, use a Mercer-Roberts plot
fprintf('radiusConverge: Mercer--Roberts plot\n')
% skip over more than one leading zero in coefficients
kMin=max(3,kMin);
k=(kMin:n-1)';

% formula (A.5)
Bksq=(a(k+1).*a(k-1)-a(k).^2)./(a(k).*a(k-2)-a(k-1).^2);
Bk=sqrt(Bksq);
% formula (A.6)
cosk=0.5*(a(k-1).*Bk./a(k)+a(k+1)./a(k)./Bk);

% eliminate unreal data points
j=find(abs(imag(Bk))+abs(imag(cosk))>1e-8);
Bk(j)=nan; cosk(j)=nan;

% weighted best lines to end window of clean data
j=(max([1;j+1]):length(Bk))';
b=(k(j).^2.*[ones(size(j)) 1./k(j)])\(k(j).^2.*Bk(j));
c=(k(j).^2.*[ones(size(j)) 1./k(j).^2])\(k(j).^2.*cosk(j));

% determine radius limiting singularity, (A.7) and (A.8)
nature = -1-b(2)/b(1) % unreliable?
costheta = c(1)
radius = rat/b(1)
% nature2 = c(2)/c(1)-1 % bad estimate

% plot in current figure window
clf()
x=[1./k(j);0];
subplot(2,1,1)
plot(1./k,real(Bk),'o:',x,b(1)+b(2)*x)
xlabel('1/k'),ylabel('rat/radius')
subplot(2,1,2)
plot(1./k.^2,real(cosk),'o:',x.^2,c(1)+c(2)*x.^2)
xlabel('1/k^2'),ylabel('cos\theta')
