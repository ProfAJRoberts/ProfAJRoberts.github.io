<?php
$title="Modelling emergent dynamics in complex systems";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
include "mathjax.html";
?>

<div class="newspaper">

 
<h2>Overview</h2>
In January 2015, <small>SIAM</small> published my book
titled <a href="http://bookstore.siam.org/mm20/"><em>Model
Emergent Dynamics in Complex Systems</em></a> on rational
mathematical modelling of dynamics. Via this web page you
may create a <small>PDF</small> book of supplementary
material tailored to the interests you specify.
<em>Currently this is a draft version.</em> 
<p>
Maurício Kritz (2019) commented in reference to the book:
<q>develops methods, techniques, and algorithms for studying
the behaviour of systems ... necessity of having simple
models, equations and mathematics as brilliantly explained
... the huge and beautiful knowledge accumulated recently
about dynamical systems. </q>


<h2>Errata of printed first edition</h2>
<ul><li>
p.8, Fig.1.1: \(x=1-\frac12\epsilon+\cdots\), not
\(+\frac12\epsilon\). 
</li><li>
p.52, l.-6: \(\lim_{x\to0}\frac{\cos x}2\) not the negative.
</li><li>
p.60, Ex. 2.11: the ODE \(x^2y''+xy'+xy^2=0\), not
\(x^2y''+x^2y'+xy^3=0\). 
</li><li>
p.75, l.7: \(\vartheta\) denotes the phase of the
left-travelling wave (not the right-travelling).
</li><li>
p.158, Ex. 4.6 (a slow subspace): use \(\dot x=-ay\), not \(\dot x=-ax\).
</li><li>
p.160, Ex. 4.12 (instability at higher order): construct the
slow manifold to higher order, such as \(O(x^3+y^3)\), and
find that the conclusion is not quite correct!
</li><li>
p.206, Ex 5.4 and 5.5: in the answers there is no need for
the error component ``\(,\alpha^2\)'', omit.
</li><li>
p.246, Eqn (7.5): omit the \(\theta\) derivatives (in the
last term).
</li><li>
p.265--6, Eqn (7.20): the right-hand side should be
"\(=-k(\cdots)\)", not "\(=k(\cdots)\)"; consequently, the
second iteration answer should be "\(\partial s/\partial t
\approx  (k/s)\left[1-\frac13k+\frac13s_x^2+\frac13ss_{xx}
-\frac23ks_x^2\right]\)".
</li><li>
p.253: last line of the first displayed maths should read
\(=(uU-U^2)w\frac{\partial^2C}{\partial x^2}\).
</li><li>
p.300: "decay rate \(\pi/4\)" should be "decay rate
\(\pi^2/4\)".
</li><li>
p.304, lateral momentum equation: the RHS of the update PDE
needs a factor of \(1/Re\); the residual of the tangential
stress equation needs to be negated; and "change to the
pressure field is due to viscous stresses at the free
surface and the need to accelerate the flow vertically"
should read "change to the horizontal velocity field is due
to viscous drag at the bed, flagged by factor~\(\gamma\),
and the acceleration due to spatial variations".
</li><li>
p.305, last line before ``Iterative construction'': 
boundary condition "\(\hat u=0\)"  should read
"\(\partial\hat u/\partial Z=0\)".
</li><li>
p.474, line 13, capital \(U\) in the PDE should be little
\(u\).
</li><li>
p.490, in the first paragraph the \(f_{2j}\) should be in
the numerators of the fractions, not the denominators. 
Similarly in the second paragraph, \(f_{2,\min}\) should
also be in the numerator.
</li><li>
p.708--712, Algorithm 21.4--8 does not work when there is
large noise in the slow variables.  It does appear to be OK
when the slow variable noise is small or zero.
</li></ul>


 
<h2>Among the chapters that follow, choose the interesting ones</h2>
The chapters labelled <small>BOOK</small> are in the published book.
At the end click Submit to process, typeset and produce a
<small>PDF</small> supplement tailored just for you. The
processing automatically detects all prerequisite chapters
and includes them as well. Only select what interests
you.<p/> 
 <FORM ACTION="modellingx.php" METHOD="POST"> But first, what computer algebra package do you prefer? <dl>
<dt><INPUT TYPE="RADIO" name="capack" value="reduce" checked> <a href="http://www.reduce-algebra.com/">Reduce</a> (recommended)</dt>
<dt><INPUT TYPE="RADIO" name="capack" value="maple"> <a href="http://www.maplesoft.com/">Maple</a> (as yet only available in Part I)</dt>
<dt><INPUT TYPE="RADIO" name="capack" value="mathematica"> <a href="http://www.wolfram.com/products/mathematica">Mathematica</a> (as yet only available in Part I, thanks to Rick Eller)</dt> </dl> <p/> 
 <dl><dd><dl> </dl></dd><p/>
<dt><b>Asymptotic methods solve algebraic and differential equations</b></dt><dd><dl>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec1p2" value="t"--> Perturbed algebraic equations solved iteratively</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec1p3" value="t"--> Power series solve ordinary differential equations</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec1p5" value="t"--> The normal form of oscillations give their amplitude and frequency</dt> 
 </dl></dd><p/>
<dt><b>Basic fluid dynamics</b></dt><dd><dl>
<dt><INPUT TYPE="CHECKBOX" name="sec2p1" value="t"> Flow description</dt>
<dt><INPUT TYPE="CHECKBOX" name="sec2p2" value="t"> Conservation of mass</dt>
<dt><INPUT TYPE="CHECKBOX" name="sec2p3" value="t"> Conservation of momentum</dt>
<dt><INPUT TYPE="CHECKBOX" name="sec2p4" value="t"> The state space</dt> 
 </dl></dd><p/>
<dt><b>Centre manifolds emerge</b></dt><dd><dl>
<dt><INPUT TYPE="CHECKBOX" name="sec3p1" value="t"> Couette flow</dt>
<dt><INPUT TYPE="CHECKBOX" name="sec3p2" value="t"> The metastability of quasi-stationary probability distributions</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec3p3" value="t"--> The centre manifold emerges</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec3p4" value="t"--> Construct centre manifolds iteratively</dt>
<dt><INPUT TYPE="CHECKBOX" name="sec3p5" value="t"> Taylor vortices form in a pitchfork bifurcation</dt>
<!--
<dt><INPUT TYPE="CHECKBOX" name="sec3p6" value="t"> Achieve even more flexibility</dt>
-->
<dt><INPUT TYPE="CHECKBOX" name="sec3p7" value="t"> Irregular centre manifolds encompass novel applications</dt> 
 </dl></dd><p/>
<dt><b>High fidelity numerical models use centre manifolds</b></dt><dd><dl>
<dt><INPUT TYPE="CHECKBOX" name="sec4p1" value="t"> Introduction to some numerical methods</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec4p2" value="t"--> Introduce holistic discretisation on just two elements</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec4p3" value="t"--> Holistic discretisation in one-D</dt>
<dt><INPUT TYPE="CHECKBOX" name="sec4p5" value="t"> Model physical boundary conditions</dt>
<dt><INPUT TYPE="CHECKBOX" name="sec4p4" value="t"> Dispersion along pipes invokes cylindrical elements</dt> 
 </dl></dd><p/>
<dt><b>Normal forms usefully illustrate</b></dt><dd><dl>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec1p4" value="t"--> Normal forms simplify evolution</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec5p1" value="t"--> Separate the fast and slow dynamics</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec5p3" value="t"--> Appropriate initial conditions empower accurate forecasts</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec5p2" value="t"--> Subcentre slow manifolds are useful but do not emerge</dt>
<dt>N/A Normal forms for homogenisation</dt> 
 </dl></dd><p/>
<dt><b>Hopf bifurcation has oscillation within the centre manifold</b></dt><dd><dl>
<dt><INPUT TYPE="CHECKBOX" name="sec6p1" value="t"> Linear stability of double diffusion</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec6p2" value="t"--> Directly model oscillations in Cartesian-like variables</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec6p3" value="t"--> Model the modulation of oscillations</dt>
<dt><INPUT TYPE="CHECKBOX" name="sec6p4" value="t"> Nonlinear evolution of double diffusion</dt>
<dt>N/A Chaos appears in triple convection</dt> 
 </dl></dd><p/>
<dt><b>Avoid memory in modelling non-autonomous or stochastic systems</b></dt><dd><dl>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec7p2" value="t"--> Averaging is often a good first modelling approximation</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec7p3" value="t"--> Coordinate transforms separate slow from fast in non-autonomous dynamics</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec7p1" value="t"--> Introducing basic stochastic calculus</dt> 
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec7p4" value="t"--> Strong and weak models of stochastic dynamics</dt> 
 </dl></dd><p/>
<dt><b>Large-scale spatial variations</b></dt><dd><dl>
<dt><INPUT TYPE="CHECKBOX" name="sec8p1" value="t"> Poiseuille pipe flow</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec8p2" value="t"--> Cross-stream mixing causes longitudinal dispersion in pipes</dt>
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec8p3" value="t"--> Thin fluid films evolve slowly over space and time</dt> 
<dt>BOOK<!--INPUT TYPE="CHECKBOX" name="sec8p4" value="t"--> Resolve inertia in thicker faster fluid films</dt> 
</dl></dd><p/>
<dt><b>Patterns form and evolve</b></dt><dd><dl>
<dt><INPUT TYPE="CHECKBOX" name="sec10p1" value="t"> One-dimensional introduction</dt>
<dt>N/A Two-dimensional spatio-temporal patterns</dt>
<dt>N/A Embedding slow dynamics</dt> </dl></dd></dl> 
<p/>Enter the magic word "p&nbsp;o&nbsp;s&nbsp;s&nbsp;u&nbsp;m" into
<input type="text" size=6 name="magic"> then 
<input type="submit" value="Submit" name="%submit"> 
for processing and typesetting.<br/> 
 <p/><em>Wait for perhaps five minutes or so for the results page to load</em>---the results page will load only after the book has been typeset (or failed as the case may be). 
 </FORM> 
 
<h2>Print the book 2up</h2>
The book is typeset onto A5 pages (in colour) so please save
forests and print two pages per sheet of paper. Also, A5 is
by far the best standard size for reading electronically on
your computer screen.

</div>

<?php 
include "footer.php";
?>