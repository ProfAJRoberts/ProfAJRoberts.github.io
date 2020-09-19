%a short description, printed by 'help'
%!TEX root = simple.tex
%{
\section{Compute the Stieltjes integral}

This code computes approximations to the Stieltjes integral
\begin{equation}
 y(x)=\int_0^\infty \frac{e^{-t}}{1+xt}\,dt\,. 
 \label{eq:s}
\end{equation}

Choose an integral step size in~\(t\), and create a grid of \(xt\)-values.
\begin{matlab}
%}
dt=0.1
[x,t]=meshgrid(0:0.5:9,dt/2:dt:5);
%{
\end{matlab}
For each~\(x\), compute integral~\eqref{eq:s} via a simple midpoint rule for the integral in~\(t\).
\begin{matlab}
%}
y=sum(exp(-t)./(1+x.*t))*dt
%{
\end{matlab}

Plot the approximate integrals~\eqref{eq:s}.
Save to file in order to be shown by Figure~\ref{fig:s}.
\begin{matlab}
%}
subplot(2,2,1)
plot(x(1,:),y)
matlab2tikz('simple.ltx')
%{
\end{matlab}
\begin{figure}
\caption{\label{fig:s}the Stieltjes integral}
\centering
\IfFileExists{simple.ltx}{\input{simple.ltx}}{}
\end{figure}
%}
