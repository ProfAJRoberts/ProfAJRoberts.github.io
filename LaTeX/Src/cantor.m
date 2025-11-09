% draw a Cantor set, of depths up to 5
mid=[2 1;1 2]/3;
x=[0;1];
y=zeros(2,1);
clf()
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
set(gca,'position',[.2 .2 .6 .6])
exportgraphics(gcf,'cantor.pdf') % post-2020
%print('-depsc','cantor') % pre-2020
matlab2tikz('cantor.tex')
