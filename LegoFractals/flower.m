function flower(n)
% draw the flower 
th=linspace(0,2*pi,7)';
r=[cos(th) sin(th)];
figure
axis([-1 1 -1 1])
axis equal
axis off
hold on
flow(r,n);
hold off

function flow(r,n)
a=[1 sqrt(3);-sqrt(3) 1]/2; %rotation by 60 
if n==0, plot(r(:,1),r(:,2))
else
	dr=diff(r)/3;
	for j=1:length(r)-1
		rr=cumsum([r(j,:);dr(j,:);dr(j,:)*a;dr(j,:)*a*a]);
		flow(rr,n-1);
		rr=cumsum([r(j+1,:);-dr(j,:);-dr(j,:)*a';-dr(j,:)*a'*a']);
		flow(flipud(rr),n-1);
	end
end
