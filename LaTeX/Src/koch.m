% draw a Koch set, of depths up to 6
r3=sqrt(3)/2;
z=[0 0.5+i*r3 1];
for n=[1 2 4 5], 
   nz=size(z,2)-1;
   r=diff([z 0])/3;
   z=[z;z+r;z+(1.5+i*r3)*r;z+2*r];
   z=conj(z(:)');
   subplot(3,3,n)
   plot([z 0]),hold on
   axis('off'),axis('image')
end
hold off
print -depsc2 koch
