<?php
$title="Normal form of stochastic or deterministic multiscale differential equations";
$thisfile=__FILE__;
$thanks="<br/>Part of the research<br/>
underlying this web service<br/>
was funded by the<br/> <a href='http://www.arc.gov.au'>
Australian Research Council</a><br/>";
include "header.php";
include "menuside.php";
include "mathjax.html";
?>

 
<h2>Overview</h2>
<div class="newspaper">
 Via this page you obtain a normal form of any supplied
 stochastic differential equation (<small>SDE</small>), or
 deterministic, autonomous or non-autonomous, <small>ODE</small>, when the
 <small>SDE</small> has fast and slow modes. The normal form
 decouples the slow modes from the fast and so supplies you
 with a faithful large time model of the stochastic
 dynamics. Being a coordinate transform you are assured that
 the dynamics are attractive over some finite domain and
 apply for all time.
<p/>For example, this web page could help you analyse the
stochastic bifurcation in the Stratonovich stochastic system
\[\begin{array}{l}
\frac{dx}{dt}=\epsilon x-xy, \\
\frac{dy}{dt}=-y+x^2-2y^2+w(t)
\end{array}\]
where near the origin \(x(t)\) evolves slowly, \(y(t)\) decays
quickly to some quasi-equilibrium, but the white noise\(~w(t)\)
`kicks' the system around. As parameter epsilon crosses
zero, a stochastic bifurcation occurs. A stochastic, near
identity, coordinate transform, \(x=X(t)+\cdots\) and \(y=Y(t)+\cdots\),
decouples the fast/slow dynamics in the new variables\(~X(t)\)
and\(~Y(t)\) so you are empowered to deduce the true slow/fast
dynamics in the bifurcation. Just click on the Submit button
to see.
<p/>
FYI: the source code is now available for collaborative
development via the folder <tt>StochasticNormalForm</tt> of a
<a href="https://github.com/uoa1184615/WebServicesGit">Github repository</a>
</div>

<h2>Submit your SDE/ODE for analysis</h2>
<div class="newspaper">
 Fill in the fields below for your <small>SDE</small> system: 
<ul>
<li>your m slow variables must be denoted <tt>x(1),...,x(m)</tt>; 
<li>your ny fast stable variables must be denoted <tt>y(1),...,y(ny)</tt>; 
<li>your nz fast unstable variables must be denoted <tt>z(1),...,z(nz)</tt>; 
<li>the fast variables must be linearly decoupled, that is,
the linear dynamics have been diagonalised; each of the
linear decay/growth rates of the fast variables must be a positive
number;
<li>any number of Stratonovich white noises (derivatives of
Wiener processes) or non-autonomous time dependent factors
may be present, they must be denoted <tt>w(any)</tt> where
`any' denotes almost any label of your choice---numeric
labels are usual;
<li>the noises <tt>w()</tt> must occur linearly in the
<small>RHS</small>s of the <small>SDE</small>s, but may be
multiplied by fast or slow variables;
<li>simply omit all <tt>w()</tt>s to analyse an autonomous
system of <small>ODE</small>s; 
<li>for the moment, the <small>SDE</small>s must be either
multinomial in form or a rational multinomial---if the
latter, then multiply through by a common denominator
transfer to the <small>RHS</small> the nonlinear terms
involving time derivatives, to end up with a multinomial
<small>RHS</small> that includes nonlinear terms with a time
derivative factor; 
<li>Use the syntax of <a href="http://www.reduce-algebra.com">Reduce for the algebraic expressions</a>
</ul>

More interesting examples are listed at the end of this web
page, and many more are listed in the Github repository.

</div>

<FORM ACTION="sdenfx.php" METHOD="POST"> <h4> 
Enter the magic word "a&nbsp;w&nbsp;h&nbsp;i&nbsp;l&nbsp;e" into 
<input type="text" size=6 name="magic"></h4> 
<TABLE>
<TR> <TH>Description
</TH> <TH>Specify your <small>SDE/ODE</small>
</TH> </TR>
<TR> <TD><STRONG>Slow modes:</STRONG> the <small>RHS</small>
of each of the m <small>S/ODE</small>s dx(1)/dt,...,dx(m)/dt separated by commas. Use
<tt>w(any)</tt> to denote noise/non-autonomous terms.
</TD> <TD> <TEXTAREA ROWS="4" COLS="36" NAME="xrhs">eps*x(1)-x(1)*y(1) </TEXTAREA> 
</TD> </TR>
<TR> <TD><STRONG>Fast stable modes</STRONG> the <small>RHS</small>
of the ny <small>S/ODE</small>s dy(1)/dt,...,dy(ny)/dt each
separated by commas. Use <tt>w(any)</tt> to denote noise/non-autonomous terms.
</TD><TD> <TEXTAREA ROWS="4" COLS="36" NAME="yrhs">-y(1)+x(1)^2-2*y(1)^2+w(1) </TEXTAREA> 
</TD> </TR>
<TR> <TD><STRONG>Fast unstable modes</STRONG> the <small>RHS</small>
of the nz <small>S/ODE</small>s dz(1)/dt,...,dz(nz)/dt each
separated by commas. Use <tt>w(any)</tt> to denote noise/non-autonomous terms.
</TD><TD> <TEXTAREA ROWS="4" COLS="36" NAME="zrhs"> </TEXTAREA> 
</TD> </TR>
<TR> <TD><STRONG>Order of error</STRONG> of the analysis in
the `nonlinear' terms on the <small>RHS</small>.
</TD> <TD> <select name="epsilo"> <option>3 <option>4 <option>5 </select> 
</TD></TR><TR> 
<TD><STRONG>Print</STRONG> expressions with the following
variables factored---this does not affect the analysis, but
must not be empty. I auto-label all noise terms with
variable <tt>sig</tt>.
</TD> <TD><input type="text" name="factor" size=36 maxlength=36 value="sig,eps"> 
</TD> 
</TR><TR> 
<TD></TD> <TD><input type="submit" value="Submit" name="%submit"> 
</TD> </TR>
</TABLE> 
</FORM> 
 
<h2>Wait a minute or two</h2>
<div class="newspaper">
 The analysis may take minutes after submitting. Be patient.
 Read the following. Please inform me of any problems.


<?php 
include "sdenfInterp.php";
?>
</div>

<h2>Levy area contraction</h2>

Another example system (adapted from
Greg Pavliotis) is
\[\begin{array}{l}
\frac{dx_1}{dt}=\epsilon y_1,\\
\frac{dx_2}{dt}=\epsilon y_2,\\
\frac{dx_3}{dt}=\epsilon (x_1y_2-x_2y_1),\\
\frac{dy_1}{dt}=-2y_1-ay_2+w_1(t),\\
\frac{dy_2}{dt}=-3y_2+ay_1+w_2(t).
\end{array}\]
Copy and paste the following into the above form.
<CENTER> 
<TABLE>
<TR> <TH>Description
</TH> <TH>Specify your <small>SDE/ODE</small>
</TH> </TR>
<TR> <TD>Slow modes: 
</TD> <TD><tt>small*y(1), small*y(2), small*(x(1)*y(2)-x(2)*y(1))
</tt></TD> </TR>
<TR> <TD>Fast stable modes
</TD> <TD><tt>-2*y(1)-a*y(2)+w(1), -3*y(2)+a*y(1)+w(2)
</tt></TD> </TR>
<TR> <TD>Fast unstable modes
</TD> <TD><tt>
</tt></TD> </TR>
<TR> <TD>Order of error</TD> <TD><tt>4
</tt></TD> </TR>
<TR> <TD>Print</TD> <TD><tt>sig,small
</tt></TD> </TR>
</TABLE> 
</CENTER> 
To cope with the off-diagonal terms, the algorithm modifies the system to 
\(
\dot x_{1}=\varepsilon ^{2} y_{1}\,,\quad\)
\(
\dot x_{2}=\varepsilon ^{2} y_{2}\,,\quad\)
\(
\dot x_{3}=\varepsilon ^{2} \big(-x_{2} y_{1}+x_{1} y_{2}\big)\,,\quad\)
\(
\dot y_{1}=\sigma  w_{1}-\varepsilon  y_{2} a-2 y_{1}\,,\quad\)
\(
\dot y_{2}=\sigma  w_{2}+\varepsilon  y_{1} a-3 y_{2}\,,\)
and computes the following results in which the new slow and fast variables have been nonlinearly separated by the time dependent coordinate transform.

<h4>Near identity, time dependent coordinate transform</h4>
\(
y_{1}\approx \sigma  \varepsilon  \big(-{e^{-2t}\star}w_{2}\, a+{e^{-3t}\star}w_{2}\, a\big)+\sigma  {e^{-2t}\star}w_{1}\,+\varepsilon  Y_{2} a+Y_{1}\,,\quad\)
\(
y_{2}\approx \sigma  \varepsilon  \big({e^{-2t}\star}w_{1}\, a-{e^{-3t}\star}w_{1}\, a\big)+\sigma  {e^{-3t}\star}w_{2}\,+\varepsilon  Y_{1} a+Y_{2}\,,\quad\)
\(
x_{1}\approx -1/2 \sigma  \varepsilon ^{2} {e^{-2t}\star}w_{1}\,-1/2 \varepsilon ^{2} Y_{1}+X_{1}\,,\quad\)
\(
x_{2}\approx -1/3 \sigma  \varepsilon ^{2} {e^{-3t}\star}w_{2}\,-1/3 \varepsilon ^{2} Y_{2}+X_{2}\,,\quad\)
\(
x_{3}\approx \sigma  \varepsilon ^{2} \big(-1/3 {e^{-3t}\star}w_{2}\, X_{1}+1/2 {e^{-2t}\star}w_{1}\, X_{2}\big)+\varepsilon ^{2} \big(1/2 X_{2} Y_{1}-1/3 X_{1} Y_{2}\big)+X_{3}\,.\)


<h4>Resultant normal form S/ODEs</h4>
\(
\dot Y_{1}\approx -\varepsilon ^{2} Y_{1} a^{2}-2 Y_{1}\,,\quad\)
\(
\dot Y_{2}\approx \varepsilon ^{2} Y_{2} a^{2}-3 Y_{2}\,,\quad\)
\(
\dot X_{1}\approx -1/6 \sigma  \varepsilon ^{3} w_{2} a+1/2 \sigma  \varepsilon ^{2} w_{1}\,,\quad\)
\(
\dot X_{2}\approx 1/6 \sigma  \varepsilon ^{3} w_{1} a+1/3 \sigma  \varepsilon ^{2} w_{2}\,,\quad\)
\(
\dot X_{3}\approx \sigma  \varepsilon ^{3} \big(1/6 w_{2} X_{2} a+1/6 w_{1} X_{1} a\big)+\sigma  \varepsilon ^{2} \big(1/3 w_{2} X_{1}-1/2 w_{1} X_{2}\big).\)


<h3>Travelling waves in fluctuating kdV example</h3>

Potzsche and Rasmussen (2006) [Example 5.4] sought
travelling wave solutions, \(u(x-c^2t)\) with wave
speed\(~c^2\), of a modified KdV equation. This leads to the
system \(\dot u_1=u_2\), \(\dot u_2=u_3\), \(\dot
u_3=c^2u_2-a(t)u_1^2u_2\).  For simplicity I set \(c^2=1\). 
A transform to diagonalise the linear part into slow
variable\(~x\), stable\(~y\) and unstable\(~z\) is then that
\(u_1 = x+y+z\), \(u_2 = z - y\) and \(u_3 = z + y\).
<p/>
Using <tt>w(a)</tt> to denote the variable
coefficient\(~a(t)\) (represented in the output by\(~\sigma
w_a\)), copy and paste the following into the above form.
<CENTER> 
<TABLE>
<TR> <TH>Description
</TH> <TH>Specify your <small>SDE/ODE</small>
</TH> </TR>
<TR> <TD>Slow modes: 
</TD> <TD><tt>w(a)*(x(1)+y(1)+z(1))^2*(z(1)-y(1))
</tt></TD> </TR>
<TR> <TD>Fast stable modes
</TD> <TD><tt>-y(1)-w(a)*(x(1)+y(1)+z(1))^2*(z(1)-y(1))/2
</tt></TD> </TR>
<TR> <TD>Fast unstable modes
</TD> <TD><tt>+z(1)-w(a)*(x(1)+y(1)+z(1))^2*(z(1)-y(1))/2
</tt></TD> </TR>
<TR> <TD>Order of error</TD> <TD><tt>3
</tt></TD> </TR>
<TR> <TD>Print</TD> <TD><tt>sig,small
</tt></TD> </TR>
</TABLE> 
</CENTER> 

Putting \(Z_1 = 0\) into the resulting coordinate transform
gives the centre-stable manifold; conversely, putting \(Y_1
= 0\) gives the centre-unstable manifold.  The expressions
have the same convolutions as those of Potzsche and
Rasmussen (2006).


<?php 
include "footer.php";
?>