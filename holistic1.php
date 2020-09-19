<?php
$title="Holistic discretisation of a dynamical Partial Differential Equation";
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
 a dynamical partial differential equation
 (<small>PDE</small>) using dynamical systems theory.
 The technique not only ensures consistency of the
 discretisation, but remarkably theory ensures the
 exponentially quick relevance of the discretisation at
 finite grid spacing&nbsp;h. Theory also suggests the
 numerical disretisation should have good stability
 properties on a coarse spatial grid. I use a
 generalised Burgers' equation as an example:
 <center><table border=0 align=center> <tr><td><Table
 align=left> <tr><td nowrap align=center> </td> <td
 nowrap align=center> du<hr NOSHADE>dt<Br></td> <td
 nowrap align=center> +u</td> <td nowrap align=center>
 du<hr NOSHADE>dx<Br></td> <td nowrap align=center> =
 </td> <td nowrap align=center> d<sup>2</sup>u<hr
 NOSHADE>dx<sup>2</sup><Br></td> <td nowrap
 align=center> +ru<sup>3</sup>&nbsp;.</td>
 </Table></td></table></center> <p/> A <A
 HREF="holistic3.html">companion page</A> discretises
 coupled <small>PDE</small>s in one space dimension,
 such as the complex Ginzburg--Landau equation. Later,
 I may develop web pages interfacing tools for
 discretisations in two or more spatial dimensions,
 forced inhomogeneous <small>PDE</small>s and the
 discretisation near boundaries. 
 
<h2>Submit your PDE for analysis</h2>
 Fill in the following fields for your
 <small>PDE</small> and its discretisation---assume the
 dependent field u(x,t) is a function of space x and
 time t. 
 Use the syntax of <a href="http://www.reduce-algebra.com">Reduce for the algebraic expressions.</a>
 Values of the fields for the generalised
 Burgers' equation are listed in the third column as an
 example. <p/> 
 <FORM ACTION="holistic1x.php" METHOD="POST">
 <CENTER><TABLE><TR> <TH>Description</TH> <TH>your
 <small>PDE</small> is du/dt = RHS</TH>
 <TH>Burgers'</TH> </TR><TR><TD> <STRONG>Dominant
 dissipation</STRONG> factor on <small>RHS</small>
 </TD><TD> <select name="dissipate"> <option>df(u,x,2)
 <option>df(u,x,4) <option>df(u,x,6) </select>
 </TD><TD> df(u,x,2) </TD></TR><TR><TD>
 <STRONG>Coefficient</STRONG> of dominant dissipation
 factor on <small>RHS</small> (non-zero when
 u=constant) </TD><TD> <input type="text" name="discof"
 size=12 maxlength=12 value="1"> </TD><TD> 1
 </TD></TR><TR><TD> <STRONG>Dominant
 perturbing</STRONG> terms on <small>RHS</small>
 (linear or nonlinear, considered first order relative
 to&nbsp;u) </TD><TD> <input type="text"
 name="firstfac" size=24 maxlength=48 value="0">
 </TD><TD> -u*df(u,x) </TD></TR><TR><TD> <STRONG>Lesser
 perturbing</STRONG> terms on <small>RHS</small>
 (linear or nonlinear, considered second order relative
 to&nbsp;u) </TD><TD> <input type="text"
 name="secondfac" size=24 maxlength=48 value="0">
 </TD><TD> +r*u^3 </TD></TR><TR><TD>
 <STRONG>Width</STRONG> in space of the numerical
 stencil </TD><TD> <select name="stenwidth"> <option>3
 <option>5 <option>7 <option>9 </select> </TD><TD> 3
 </TD></TR><TR><TD> <STRONG>Order of error</STRONG> of
 the discretisation in the perturbations relative
 to&nbsp;u (the often useful <TT>decreasing</TT> option
 means for the perturbing terms the stencil width is
 reduced by&nbsp;two for each order in the
 perturbation) </TD><TD> <select name="epsilo">
 <option>2 <option>3 <option>4 <option>decreasing
 </select> </TD><TD> 3 </TD></TR><TR><TD>
 <STRONG>Print</STRONG> expressions with the following
 variables factored---this does not affect the
 analysis. </TD><TD> <input type="text" name="factor"
 size=24 maxlength=24 value="h"> </TD><TD> h,r
 </TD></TR></TABLE></CENTER> 
 Enter the magic word
 "s&nbsp;p&nbsp;r&nbsp;i&nbsp;n&nbsp;g" into <input
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