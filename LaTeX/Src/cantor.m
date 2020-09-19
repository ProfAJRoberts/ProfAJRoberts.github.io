% draw a Cantor set, of depths up to 5
mid=[2 1;1 2]/3;
x=[0;1];
y=zeros(2,1);
%subplot(1.5,1.5,1) %ignore messages
clf(), subplot('position',[.2 .2 .55 .55])
plot(x,y),hold on;
for n=1:5, 
    z=mid*x;
	x=[x(1,:) z(2,:)
	   z(1,:) x(2,:)];
	y=[y y]-0.05;
	plot(x,y) 
end
axis('off')
axis('image')
hold off
print -depsc2 cantor
matlab2tikz('cantor.tex')
