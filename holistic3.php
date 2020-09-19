<?php
$title="Holistic discretisation of three coupled dynamical Partial Differential Equations";
$thisfile=__FILE__;
$thanks="<br/>Part of the research<br/>
underlying this web service<br/>
was funded by the<br/> <a href='http://www.arc.gov.au'>
Australian Research Council</a><br/>";
include "header.php";
include "menuside.php";
?>

 
<h2>Overview</h2>
 Via this page you obtain the spatial discretisation of
 up to <em>three</em> coupled dynamical partial
 differential equation (<small>PDE</small>) using
 dynamical systems theory. The technique not only
 ensures consistency of the discretisation, but
 remarkably theory ensures the exponentially quick
 relevance of the discretisation at finite grid
 spacing&nbsp;h. Theory also suggests the numerical
 disretisation should have good stability properties on
 a coarse spatial grid.<p/> 
 I use a slow mode coupled complex Ginzburg-Landau
 equation as an example (from <A
 HREF="http://arXiv.org/abs/chao-dyn/9909028">Ispen and
 Sorensen 1999</A>): <center><table border=0
 align=center> <tr><td> <table align=left><tr><td
 nowrap align=center> </td><td nowrap> <table border=0
 align=left><tr><td nowrap align=right> <table
 border=0><tr><td nowrap Align=left> </td> <td nowrap
 align=center> du<hr NOSHADE>dt<Br></td> <td nowrap
 align=center> </td></tr></table></td><td nowrap
 align=left> <table border=0><tr> <td nowrap
 Align=left> = </td></tr></table></td><td nowrap
 align=left> <table border=0><tr><td nowrap Align=left>
 ru-(1+ia)<font face=symbol>|</font>u<font
 face=symbol>|</font><sup>2</sup>u+</td> <td nowrap
 align=center>d<sup>2</sup>u<hr
 NOSHADE>dx<sup>2</sup><Br> </td><td nowrap
 align=center> +(1-ib)uw&nbsp;, </td>
 </tr></table></TD></TR><TR><TD NOWRAP align="right"
 colspan=0> <table border=0><tr> <td nowrap Align=left>
 3</td> <td nowrap align=center> dw <hr
 NOSHADE>dt<Br></td> <td nowrap align=center> </td>
 </tr></table></td><td nowrap align=left> <table
 border=0><tr> <td nowrap Align=left> =
 </td></tr></table></td> <td nowrap align=left>
 <table><TR><TD nowrap align="right" colspan=0>-w-<font
 face=symbol>|</font> u<font
 face=symbol>|</font><sup>2</sup>+2</td> <td nowrap
 align=center>d<sup>2</sup>w <hr
 NOSHADE>dx<sup>2</sup><Br></td> <td nowrap
 align=center> </td></tr></table></TD></TR>
 </table></td> <td nowrap></td>
 </tr></table></td></tr></table></center> <p/> 
 Sometimes referred to as a distributed slow-Hopf
 equation, this system is considered a normal form for
 oscillatory reaction-diffusion systems with a slow
 real mode&nbsp;w. Problem: the absolute
 function&nbsp;<font face=symbol>|</font>u<font
 face=symbol>|</font> is not analytic and cannot be
 manipulated simply in algebra. I remove this problem
 by the second of two alternatives: you could write two
 equations one for each of the real and imaginary parts
 of&nbsp;u; I prefer introducing the complex
 conjugate&nbsp;v = u<sup>*</sup>, then <font
 face=symbol>|</font>u<font
 face=symbol>|</font><sup>2</sup> = uv and the
 dynamical <small>PDE</small> for&nbsp;v is the complex
 conjugate of that for&nbsp;u:
 <center> <table border=0 align=center> <tr><td> <table
 align=left><tr> <td nowrap align=center> </td> <td
 nowrap align=center> dv <hr NOSHADE>dt<Br></td> <td
 nowrap align=center> = rv-(1-ia)uv<sup>2</sup>+</td>
 <td nowrap align=center> d<sup>2</sup>v <hr NOSHADE>
 dx<sup>2</sup><Br></td> <td nowrap align=center>
 +(1+ib)vw&nbsp;. </td></tr></table>
 </td></tr></table></center> 
 These three coupled <small>PDE</small>s are given as
 an example. <p/> The accompanying <A
 HREF="holistic1.html">original web page</A> empowers
 you to discretise a single <small>PDE</small>, such as
 Burgers' equation. Later versions will analyse coupled
 <small>PDE</small>s in two or more spatial dimensions,
 forced inhomogeneous <small>PDE</small>s and the
 discretisation near boundaries.<p/> 
 Read the <A HREF="holistictheory.pdf">overview of the
 theoretical support</A> for our holistic
 discretisation.<p/> 
 
<h2>Submit your coupled PDEs for analysis</h2>
 Fill in the following fields for your coupled
 <small>PDE</small>s and its discretisation---assume
 the dependent fields&nbsp;u(x,t), v(x,t)
 and&nbsp;w(x,t) are a function of space&nbsp;x and
 time&nbsp;t. Use the syntax of <a
 href="http://www.reduce-algebra.com">Reduce for the
 algebraic expressions</a>. Values of the fields for
 the slow mode coupled complex Ginzburg-Landau equation
 are listed in the third column as an example.<p/> 
 <FORM ACTION="holistic3x.php" METHOD="POST">
 <center><table><TR> <TH>Description</TH> <TH>your
 coupled <small>PDE</small>s</TH> <TH>slow G-L</TH>
 </TR><TR> <TH></TH> <TH>du/dt = RHS</TH> <TH></TH>
 </TR><TR> <TD><STRONG>Dominant dissipation</STRONG>
 factor on <small>RHS</small></TD><TD> <select
 name="udissipate"> <option>df(u,x,2) <option>df(u,x,4)
 <option>df(u,x,6) </select> </TD> <TD>df(u,x,2)</TD>
 </TR><TR> <TD><STRONG>Coefficie nt</STRONG> of
 dominant dissipation factor on <small>RHS</small>
 (non-zero when u,v,w constant)</TD> <TD><input
 type="text" name="udiscof" size=12 maxlength=12
 value="1"> </TD> <TD>1</TD> </TR><TR>
 <TD><STRONG>Dominant perturbing</STRONG> terms on
 <small>RHS</small> (linear or nonlinear, considered
 first order relative to&nbsp;u)</TD> <TD><input
 type="text" name="ufirstfac" size=24 maxlength=48
 value="0"> </TD> <TD>r*u</TD> </TR><TR>
 <TD><STRONG>Lesser perturbing</STRONG> terms on
 <small>RHS</small> (linear or nonlinear, considered
 second order relative to&nbsp;u)</TD> <TD><input
 type="text" name="usecondfac" size=24 maxlength=48
 value="0"> </TD> <TD>-(1+i*a)*u^2*v +(1-i*b)*u*w</TD>
 </TR><TR> <TH></TH> <TH>dv/dt = RHS</TH> <TH></TH>
 </TR><TR> <TD><STRONG>Dominant dissipation</STRONG>
 factor on <small>RHS</small></TD> <TD> <select
 name="vdissipate"> <option>df(v,x,2) <option>df(v,x,4)
 <option>df(v,x,6) </select> </TD> <TD>df(v,x,2)</TD>
 </TR><TR> <TD><STRONG>Coefficie nt</STRONG> of
 dominant dissipation factor on <small>RHS</small>
 (non-zero when u,v,w constant)</TD> <TD><input
 type="text" name="vdiscof" size=12 maxlength=12
 value="1"> </TD> <TD>1</TD> </TR><TR>
 <TD><STRONG>Dominant perturbing</STRONG> terms on
 <small>RHS</small> (linear or nonlinear, considered
 first order relative to&nbsp;v)</TD> <TD><input
 type="text" name="vfirstfac" size=24 maxlength=48
 value="0"> </TD> <TD>r*v</TD> </TR><TR>
 <TD><STRONG>Lesser perturbing</STRONG> terms on
 <small>RHS</small> (linear or nonlinear, considered
 second order relative to&nbsp;v)</TD> <TD><input
 type="text" name="vsecondfac" size=24 maxlength=48
 value="0"> </TD> <TD>-(1-i*a)*u*v^2 +(1+i*b)*v*w</TD>
 </TR><TR> <TH></TH> <TH>dw/dt = RHS</TH> <TH></TH>
 </TR><TR> <TD><STRONG>Dominant dissipation</STRONG>
 factor on <small>RHS</small></TD> <TD> <select
 name="wdissipate"> <option>df(w,x,2) <option>df(w,x,4)
 <option>df(w,x,6) </select> </TD> <TD>df(w,x,2)</TD>
 </TR><TR> <TD><STRONG>Coefficie nt</STRONG> of
 dominant dissipation factor on <small>RHS</small>
 (non-zero when u,v,w constant)</TD> <TD><input
 type="text" name="wdiscof" size=12 maxlength=12
 value="1"> </TD> <TD>2/3</TD> </TR><TR>
 <TD><STRONG>Dominant perturbing</STRONG> terms on
 <small>RHS</small> (linear or nonlinear, considered
 first order relative to&nbsp;w)</TD> <TD><input
 type="text" name="wfirstfac" size=24 maxlength=48
 value="0"> </TD> <TD>-w/3-u*v/3</TD> </TR><TR>
 <TD><STRONG>Lesser perturbing</STRONG> terms on
 <small>RHS</small> (linear or nonlinear, considered
 second order relative to&nbsp;w)</TD> <TD><input
 type="text" name="wsecondfac" size=24 maxlength=48
 value="0"> </TD> <TD>0</TD> </TR><TR> <TH></TH>
 <TH>expansion parameters</TH> <TH></TH> </TR><TR>
 <TD><STRONG>Width</STRONG> in space of the numerical
 stencil</TD> <TD> <select name="stenwidth"> <option>3
 <option>5 <option>7 <option>9 </select> </TD>
 <TD>5</TD> </TR><TR> <TD><STRONG>Order of
 error</STRONG> of the discretisation in the
 perturbations relative to&nbsp;u (the often useful
 <TT>decreasing</TT> option means for the perturbing
 terms the stencil width is reduced by&nbsp;2 for each
 order in the perturbation)</TD> <TD> <select
 name="epsilo"> <option>2 <option>3 <option>4
 <option>decreasing </select> </TD> <TD>decreasing</TD>
 </TR><TR> <TD><STRONG>Print</STRONG> expressions with
 the following variables factored---this does not
 affect the analysis.</TD> <TD><input type="text"
 name="factor" size=24 maxlength=24 value="h"> </TD>
 <TD>h,r,a,b</TD> </TR></table></center> 
 Enter the magic word
 "w&nbsp;i&nbsp;n&nbsp;t&nbsp;e&nbsp;r" into <input
 type="text" size=6 name="magic"> then click <input
 type="submit" value="Submit" name="%submit"> </FORM>
 <p/> 
 
<h2>Wait a minute or two</h2>
 The analysis may take minutes after submitting. Be
 patient. Perhaps make a cup of coffee while you wait.
 <P/> 
 I also generate a Matlab function implementing the
 discretisation for integration by <SMALL>ODE45</SMALL>
 or equivalent. <em>I give no guarantee of the
 performance of the discretisation, only that I have
 endeavoured to analyse your <small>PDE</small>
 according to the principles summarised in the <a
 href="holistictheory.pdf", title="theoretical support
 for holistic discretisation"> supporting
 theory</a>.<P/></em> 
 <small>Note: in this approach one must use a wide
 enough stencil in order to represent nonlinear terms
 with a large number of derivatives, even if each
 derivative is relatively low order.</small> 


<?php 
include "footer.php";
?>