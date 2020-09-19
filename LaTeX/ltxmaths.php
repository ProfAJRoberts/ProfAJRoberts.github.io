<?php
$title="LaTeX: More mathematics";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
include "mathjax.html";
?>

<h1 align=center>More mathematics</h1>
<div style="column-width:40em;
        -moz-column-width:40em;
     -webkit-column-width:40em;">
 <P>Typesetting mathematics is a work of art.
 LaTeX&nbsp;knows a lot of the basics (more than any other),
 but you often have to fiddle to get best results---but then
 the onus is on us to know what is 'best'. Look at how to
 produce the mathematics shown in<tt><a
 href="Src/maths.pdf"> Src/maths.pdf</a></tt> </P> 
 
<p><a href="https://www.youtube.com/watch?v=wOJy0AjW68Q&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=26&t=0s">See video discussion 61</a>

 <P><A
 HREF="ltxenviron.html#smath">Recall how to</A> </P>
<ul>
<li>include mathematics inline, with the <TT>\</TT><TT>( ...
\</TT><TT>)</TT> environment, or displayed using either the
<TT>\</TT><TT>[ ... \</TT><TT>]</TT> or <TT>equation</TT>
environments; 
<li>set sub- and super-scripts; 
<li>use the <TT>\frac</TT> command to typeset fractions; and 
<li>that many commands type mathematical symbols such as the
Greek alphabet. 
</ul>

<P>Thanks to MathJax for typesetting the following
interleaved LaTeX fragments.</P>

<A NAME="AMS"></a> 
<h2>AMS-LaTeX</h2>
<P>The American Mathematical Society has enormously extended
the mathematical environments, commands, fonts and symbols
in LaTeX. Get into the habit of accessing part of their
extensions by putting <TT>\usepackage{amsmath}</TT> into the
preamble. Investigate other extensions if you can spare the
time.</P>

<P>Often useful are the American Mathematical
Society's symbols: include with
<TT>\usepackage{amssymb}</TT> in the preamble<a
href="http://www.rpi.edu/dept/arc/training/latex/amssymblist.pdf"> 
(download a list of the symbols).</a>   <em>I strongly
recommend you stay within the symbols provided by standard
LaTeX and <TT>amssymb</TT></em> <A
HREF="http://mirrors.ctan.org/info/symbols/compact/LaTeXSymbols.pdf"> 
(listed in the first 32 pages of this summary by Emre
Sremutlu).</A></P>

<P>For curvaceous capital letters in maths, do not use the
font <tt>\mathscr</tt> as <em>readers</em> cannot
differentiate between many of the characters, instead use
<tt>\mathcal</tt>.

<P><em>For procrastinators:</em> interestingly, sketch the
symbol you are looking for into <a
href="http://detexify.kirelabs.org/classify.html">the
Detexify web server</a> and it will list LaTeX
possibilities. But beware, although great fun it is rarely
useful to employ symbols from the 14,283 (Jan 2017) listed
in <a
href="http://mirrors.ctan.org/info/symbols/comprehensive/symbols-a4.pdf">
The Comprehensive LaTeX Symbol List</a>.</P>


<A NAME="Theorems"></a> 
<h2>Theorems et al.</h2>

<p>Repeating the end of the section on Environments, 
LaTeX does not by default provide an environment for
theorems. Instead LaTeX provides an environment for you to
create theorem-like environments (extended by the American
Mathematical Society). I recommend you include the following
in your preambles:</P>
<pre>
\usepackage{amsthm} % optional
... cleveref ...
\newtheorem{theorem}{Theorem}
\newtheorem{corollary}[theorem]{Corollary}
\newtheorem{lemma}[theorem]{Lemma}
\newtheorem{definition}[theorem]{Definition}
</pre>
<p>Thereafter,  as seen in Section 1 of <tt><a
href="Src/maths.tex">Src/maths.tex</a></tt>, you use the
following environments as appropriate:</p><pre>
\begin{theorem}...\end{theorem}
\begin{corollary}...\end{corollary}
\begin{lemma}...\end{lemma}</TT>
\begin{definition}...\end{definition}
\begin{proof}...\end{proof} 
</pre>
<p>The last proof environment is from the <tt>amsthm</tt> package.</p>

<p>Label and cross-reference these as usual.</p>

<p>Such environments obtained from <tt>\newtheorem</tt> may
also have an optional argument to provide a name to the
'theorem'.  For example, </p>
<pre>\begin{definition}[right-angled triangles]...\end{definition}</pre>


<P><tt><a href="Src/maths.tex">Src/maths.tex</a></tt> also
shows the <tt>extarticle</TT> class allows you to get
larger fonts, e.g., for displays: 14pt, 17pt and 20pt.</P>


<A NAME="Accents"></a> 
<h2>Accents</h2>
<P>When we want a distinct quantity that has a close
relation to something else, often use a mathematical accent.
Common mathematical accents over a single character,
say&nbsp;a, are:
</P>
<ul>
<li><TT>\bar a</TT> to put an overbar over a; 
<li><TT>\tilde a</TT> to put '~' over a; 
<li><TT>\hat a</TT> to put '^' over a; 
<li><TT>\dot a</TT> to put a single dot over a; 
<li><TT>\ddot a</TT> to put a double dot over a; and 
<li><TT>\vec a</TT> to put a little arrow over a. 
</ul><P>If necessary, accents may be stacked on top of each
other. See Section 2 in <tt><a
href="Src/maths.tex">Src/maths.tex</a></tt>.</P>

<table><tr><td width=50%>
Mathematical accents are performed by a
short command with one argument, such as
\[
  \tilde f(\omega)=\frac{1}{2\pi}
  \int_{-\infty}^\infty f(x)e^{-i\omega x}\,dx\,,
\]
or
\[
  \dot{\vec \omega}=\vec r\times\vec I\,.
\]
</td><td width=50%><pre>
Mathematical accents are performed by a
short command with one argument, such as
\[
  \tilde f(\omega)=\frac{1}{2\pi}
  \int_{-\infty}^\infty f(x)
  e^{-i\omega x}\,dx\,,
\]
or
\[
  \dot{\vec \omega}=\vec r\times\vec I\,.
\]
</pre>
</td></tr></table>




 
<A NAME="Relations"></a> 
<h2>Relations</h2>
<p><a href="https://www.youtube.com/watch?v=FsxWe2lrOY4&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=27&t=0s">See video discussion 62</a>

<P>LaTeX&nbsp;knows to typeset extra space around relations
<TT>=, \approx</TT>, and </P>
<ul>
<li>inequalities <TT>&lt; , &gt; , \leq , \geq </TT> 
<li>very much so <TT>\ll , \gg </TT> 
<li>set relations <TT>\in , \subset </TT> 
</ul>and so on.</P> 

For example, \(0<\epsilon\ll1\) is
<tt>0&lt;\epsilon\ll1</tt> (not the common error 
<tt>0&lt;\epsilon&lt;&lt;1</tt> which produces the ugly
\(0<\epsilon<<1\)).






<A NAME="Delimiters"></a> 
<h2>Delimiters</h2>
 <P>Common delimiters such as
<ul>
<li>parentheses <TT>(...)</TT> 
<li>brackets <TT>[...]</TT> 
<li>braces <TT>\{...\}</TT> 
<li>angle brackets <TT>\langle...\rangle</TT> (do
<em>not</em> use the relations &lt; and &gt; for this
purpose)
<li>bars <TT>|...|</TT> or <TT>\|...\|</TT> 
</ul>
come in various sizes to cope with different
sub-expressions that they surround. Easily get the size
nearly correct using the modifying commands
<TT>\left(...\right)</TT> as seen in <tt><a
href="Src/maths.tex">Src/maths.tex</a></tt>, section 3.</P>
<table><tr><td width=50%>
See how the delimiters are of reasonable size in these examples
\[
	\left(a+b\right)\left[1-\frac{b}{a+b}
	\right]=a\,,
\]
\[
	\sqrt{|xy|}\leq\left|\frac{x+y}{2}
	\right|,
\]
even when there is no matching delimiter
\[
	\int_a^bu\frac{d^2v}{dx^2}\,dx
	=\left.u\frac{dv}{dx}\right|_a^b
	-\int_a^b\frac{du}{dx}\frac{dv}{dx}
	\,dx\,.
\]
</td><td width=50%><pre>
See how the delimiters are of reasonable 
size in these examples
\[
  \left(a+b\right)\left[1-\frac{b}{a+b}
  \right]=a\,,
\]
\[
  \sqrt{|xy|}\leq\left|\frac{x+y}{2}
  \right|,
\]
even when there is no matching delimiter
\[
  \int_a^bu\frac{d^2v}{dx^2}\,dx
  =\left.u\frac{dv}{dx}\right|_a^b
  -\int_a^b\frac{du}{dx}\frac{dv}{dx}
  \,dx\,.
\]
</pre>
</td></tr></table>
<P>Note that <TT>\left</TT> and <TT>\right</TT> must be used
in pairs so that LaTeX&nbsp;can determine the size of the
intervening mathematics. If the matching delimiter is not to
appear for any reason, such as splitting a sub-expression
over two lines or for an evaluation bar, then use
<TT>\left.</TT> or <TT>\right.</TT> to mark that boundary of
the delimiter for LaTeX.</P>
 
 
 
 
 
 
 
<A NAME="Spacing"></a> 
<h2>Spacing</h2>
 <P>In the previous examples I used <TT>\,,</TT> and
 <TT>\,.</TT> to punctuate at the end of the equations. Both
 in and out of maths, LaTeX&nbsp;provides spacing commands.
The two necessary ones are the following: </P>
<ul>
<li><TT>\,</TT> to typeset a thin space; 
<li><TT>\quad</TT> to typeset a 'quad' space (1em). 
</ul><P>Use these to space the mathematics where needed.</P>
<P>For example, see <tt><a
href="Src/maths.tex">Src/maths.tex</a></tt>, section 4, </P>
<ul>
<li>use <TT>\,</TT> to separate 
<ul>
<li>the infinitesimal from the integrand in integrals, 
<li>punctuation from mathematics (when necessary), 
<li>a number from its abbreviated physical units; 
</ul>
<li>use <TT>\quad</TT> to separate two or more equations or
text on the one line.
</ul>

<table><tr><td width=50%>
Differentials often need a bit of help
with their spacing as in
\[
  \iint xy^2\,dx\,dy 
  =\frac{1}{6}x^2y^3,
\]
whereas vector problems often lead to
statements such as
\[
  u=\frac{-y}{x^2+y^2}\,,\quad
  v=\frac{x}{x^2+y^2}\,, \quad
  \text{and}\quad w=0\,.
\]
</td><td width=50%><pre>
Differentials often need a bit of help
with their spacing as in
\[
  \iint xy^2\,dx\,dy 
  =\frac{1}{6}x^2y^3,
\]
whereas vector problems often lead to
statements such as
\[
  u=\frac{-y}{x^2+y^2}\,,\quad
  v=\frac{x}{x^2+y^2}\,, \quad
  \text{and}\quad w=0\,.
\]
</pre>
</td></tr></table>

<P>Remember to use amsmath <TT>\iint</TT> and
<TT>\iiint</TT> for multiple integrals as otherwise the
spacing is awful. Use the amsmath <TT>\text{...}</TT>
command to include a few words of ordinary text within
mathematics.</P>

<P>Punctuation? The display or not of mathematics is
irrelevant: punctuate a sentence as if the mathematical
statements, phrases, and symbols are an integral part of
the sentence.  

</p><P>When mathematics is inline (as opposed to displayed),
then the sentence punctuation should be <em>outside</em> the
mathematics environment (as otherwise the spacing is wrong).

</p><P>In particular, avoid the odious proliferation of bad
colons: for example avoid "Newton's second law is:
\(F=ma\)." The rule for colons is that the two parts of the
sentence on either side of a colon must make complete
statements.</P>


<p>Occasionally one gets very bad line breaks when using a
list in mathematics such as listing the first twelve primes
\(2,3,5,7,11,13,17,19,23,29,31,37\). In such cases, you may
include <TT>\mathcode`\,="213B</TT> inside the inline maths
environment so that the list breaks. Be discerning. </p>




<A NAME="Functions"></a> 
<h2>Functions</h2>
<p><a href="https://www.youtube.com/watch?v=U1BoGFLUKEI&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=28&t=0s">See video discussion 63</a>

<P>LaTeX&nbsp;knows how to typeset a lot of mathematical
functions. </P> 
<ul>
<li>Trigonometric and other elementary functions are defined
by the obvious corresponding command name. For example,
<TT>\sin x</TT> or <TT>\exp(i\theta)</TT>.
<li>Subscripts on more complicated functions, such as
<TT>\lim_{..}</TT> and <TT>\max_{...}</TT> are appropriately
placed under the function name.
<li>And the same goes for both sub- and super-scripts on
large operators such as <TT>\sum</TT>, <TT>\prod</TT> and
<TT>\bigcup</TT>.
</ul><P>See Section 5 in <tt><a
href="Src/maths.tex">Src/maths.tex</a></tt>. Typeset
<EM>all</EM> multicharacter mathematical names in upright
roman: when a command is not available, use amsmath
<TT>\operatorname{...}</TT> as in the Reynolds number
<TT>\operatorname{Re}</TT>.</P>

<table><tr><td width=50%>
Elementary functions are typeset
properly, even to the extent of
providing a thin space if followed by a
single letter argument:
\[
  \exp(i\theta)=\cos\theta +i\sin\theta\,,\quad
  \sinh(\log x)=\frac{1}{2}
  \left( x-\frac{1}{x} \right).
\]
With sub- and super-scripts placed
properly on more complicated functions,
\[
  \lim_{q\to\infty}\|f(x)\|_q 
  =\max_{x}|f(x)|,
\]
and large operators, such as integrals and
\[\begin{aligned}
  e^x &= \sum_{n=0}^\infty \frac{x^n}{n!}
  \quad\text{where }n!=\prod_{i=1}^n i\,,  \\
  \overline{U_\alpha} 
  & = \bigcap_\alpha U_\alpha\,.
\end{aligned}\]
Here the overline denotes an operation (the intersection),
as distinct from an accent which would be <TT>\bar</TT>. In
inline mathematics the scripts are correctly placed to the
side in order to conserve vertical space, as in
\(1/(1-x)=\sum_{n=0}^\infty x^n.\)
</td><td width=50%><pre>
Elementary functions are typeset
properly, even to the extent of
providing a thin space if followed by a
single letter argument:
\[
  \exp(i\theta)=\cos\theta +i\sin\theta\,,\quad
  \sinh(\log x)=\frac{1}{2}
  \left( x-\frac{1}{x} \right).
\]
With sub- and super-scripts placed
properly on more complicated functions,
\[
  \lim_{q\to\infty}\|f(x)\|_q 
  =\max_{x}|f(x)|,
\]
and large operators, such as integrals and
\begin{align*}
  e^x &= \sum_{n=0}^\infty \frac{x^n}{n!}
  \quad\text{where }n!=\prod_{i=1}^n i\,,  \\
  \overline{U_\alpha} 
  & =  \bigcap_\alpha U_\alpha\,.
\end{align*}
In inline mathematics the scripts are
correctly placed to the side in order to
conserve vertical space, as in
\(
  1/(1-x)=\sum_{n=0}^\infty x^n.
\)
</pre>
</td></tr></table>





<A NAME="Command"></a> 
<h2>Command definitions</h2>
<P>Recall that LaTeX&nbsp;provides a facility for you to
define your very own commands.  Since LaTeX&nbsp;does
not have a predefined Airy function we would define our own: </P>
<PRE>\newcommand{\Ai}{\operatorname{Ai}}</PRE> 
<P>and then use the command <TT>\Ai</TT> wherever needed.</p> 

<table><tr><td width=50%>
The Airy function, 
\(\newcommand{\Ai}{\operatorname{Ai}}\Ai(x)\), may be
incorrectly defined as this integral
\[  
  \Ai x=\int\exp(s^3+isx)\,ds\,.
\]
</td><td width=50%><pre>
The Airy function, $\Ai(x)$, may be
incorrectly defined as this integral
\[
  \Ai x=\int\exp(s^3+isx)\,ds\,.
\]
</pre>
</td></tr></table>

<p>Wherever you need a two (or three) letter mathematical
constant (or function) such as Reynolds number&nbsp;Re,
Prandtl number&nbsp;Pr, Peclet number&nbsp;Pe, etc, then you
<em>must</em> use <tt>\operatorname{Re}</tt> and the
like---most easily via a <tt>\newcommand</tt>.</P> 



<P>More useful commands involve arguments; I
give three of my favourites. The first two, with two
arguments, define partial derivative commands </P>
<PRE>\newcommand{\D}[2]{\frac{\partial #2}{\partial #1}} 
\newcommand{\DD}[2]{\frac{\partial^2 #2}{\partial #1^2}} 
\renewcommand{\vec}[1]{\boldsymbol{#1}}</PRE> 
<P>and the last, with one argument, <I>redefines</I> the
<TT>\vec</TT> command to denote vectors by boldface
characters (rather than have an arrow accent).  Within a
definition, <TT>#n</TT> denotes a placeholder for the
<TT>n</TT>th supplied argument. See these in use in Section
6 of <tt><a href="Src/maths.tex">Src/maths.tex</a></tt>.</P>

<table><tr><td width=50%>
This vector identity serves nicely to
illustrate two of the new commands:
\[
\newcommand{\D}[2]{\frac{\partial #2}{\partial #1}} 
\renewcommand{\vec}[1]{\mathbf{#1}}
  \vec\nabla\times\vec q
  =\vec i\left(\D yw-\D zv\right)
  +\vec j\left(\D zu-\D xw\right)
  +\vec k\left(\D xv-\D yu\right).
\]
</td><td width=50%><pre>
This vector identity serves nicely to
illustrate two of the new commands:
\[
  \vec\nabla\times\vec q
  =\vec i\left(\D yw-\D zv\right)
  +\vec j\left(\D zu-\D xw\right)
  +\vec k\left(\D xv-\D yu\right).
\]
</pre>
</td></tr></table>


<P>One can use commands at a higher level of abstraction:
the following creates a command that defines commands.  Here
<TT>\Bb</TT> empowers us to consistently define commands
such as <TT>\CC</TT>, <TT>\NN</TT> and <TT>\RR</TT> to
consistently generate \(\mathbb C\), \(\mathbb N\)
and\(~\mathbb R\).
<PRE>\newcommand{\Bb}[1]{%
  \expandafter\def\csname#1#1\endcsname%
  {\ensuremath{\mathbb #1}}}
\Bb C\Bb N\Bb R</PRE>
</P>






<A NAME="Arrays"></a> 
<h2>Arrays</h2>
 <P>Frequently we need to set mathematics in a tabular
 format.</P> <P>The usual reason is to typeset a matrix
 using an amsmath matrix environment such as</P>
<PRE>\begin{bmatrix} 
... &amp; ... &amp; ... &amp; ... \\
... &amp; ... &amp; ... &amp; ... \\
... &amp; ... &amp; ... &amp; ... 
\end{bmatrix}</PRE> 
<P>for a bracketed matrix of three rows and four columns, see <tt><a
href="Src/maths.tex">Src/maths.tex</a></tt>, Section 7. Use
environments <TT>matrix</TT> for an array without brackets,
and <TT>pmatrix</TT> environment for an array with
parentheses. The <TT>cases</TT> environment puts a brace on
the left and no delimiter on the right for mathematical case
statements.</P> 
<table><tr><td width=50%>
Arrays of mathematics are typeset using
one of the matrix environments as in
\[\begin{bmatrix}
    1 & x & 0 \\
    0 & 1 & -1
  \end{bmatrix}\begin{bmatrix}
    1 \\ y \\ 1
  \end{bmatrix}
  =\begin{bmatrix}
    1+xy \\ y-1
  \end{bmatrix}.
\]
Case statements use cases:
\[|x|=\begin{cases}
    x & \text{if }x\geq 0\,, \\
    -x & \text{if }x< 0\,.
  \end{cases}
\]
Many arrays have lots of dots all over
the place as in
\[\begin{matrix}
    -2 & 1 & 0 & 0 & \cdots & 0  \\
    1 & -2 & 1 & 0 & \cdots & 0  \\
    0 & 1 & -2 & 1 & \cdots & 0  \\
    0 & 0 & 1 & -2 & \ddots & \vdots \\
    \vdots & \vdots & \vdots & \ddots 
    & \ddots & 1  \\
    0 & 0 & 0 & \cdots & 1 & -2
  \end{matrix}
\]
</td><td width=50%><pre>
Arrays of mathematics are typeset using
one of the matrix environments as in
\[
  \begin{bmatrix}
    1 & x & 0 \\
    0 & 1 & -1
  \end{bmatrix}\begin{bmatrix}
    1 \\ y \\ 1
  \end{bmatrix}
  =\begin{bmatrix}
    1+xy \\ y-1
  \end{bmatrix}.
\]
Case statements use cases:
\[
  |x|=\begin{cases}
    x & \text{if }x\geq 0\,, \\
    -x & \text{if }x< 0\,.
  \end{cases}
\]
Many arrays have lots of dots all over
the place as in
\[
  \begin{matrix}
    -2 & 1 & 0 & 0 & \cdots & 0  \\
    1 & -2 & 1 & 0 & \cdots & 0  \\
    0 & 1 & -2 & 1 & \cdots & 0  \\
    0 & 0 & 1 & -2 & \ddots & \vdots \\
    \vdots & \vdots & \vdots & \ddots 
    & \ddots & 1  \\
    0 & 0 & 0 & \cdots & 1 & -2
  \end{matrix}
\]
</pre>
</td></tr></table>

<P>LaTeX&nbsp;has a variety of ellipses: </P>
<ul>
<li><TT>\cdots</TT> to type three dots horizontally (at the
height of the centre of a + sign);
<li><TT>\ldots</TT> to type three dots horizontally (at the
height of a comma); use this outside of mathematics also, do
<em>not</em> use '...' to typeset the three dots of an ellipsis;
<li><TT>\vdots</TT> for three vertical dots; and 
<li><TT>\ddots</TT> for three diagonal dots. 
</ul>

<P>Arrays embedded within arrays give more scope for
your imagination. If a <TT>matrix</TT> environment is not
quite flexible enough, then use the <TT>array</TT>
environment which is the same as the tabular environment but
for mathematics.</P>




<A NAME="Equation"></a> 
<h2>Equation arrays</h2>
<p><a href="https://www.youtube.com/watch?v=Dc6luYF9dfI&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=29&t=0s">See video discussion 64</a>
<!-- 
 <P>Often we want to align related equations together, or to
 align each line of a multi-line derivation. The
 <TT>eqnarray</TT> mathematics environment does this.</P>
 <P>The eqnarray environment assumes three columns: the left
 column right justified; the middle column, centred; and the
 right column left justified: </P>
<PRE>\begin{eqnarray} 
... &amp; ... &amp; ... \\
... &amp; ... &amp; ... \\
... &amp; ... &amp; ... 
\end{eqnarray}</PRE> 
 -->
<P>Often we want to align related equations together, or to
align each line of a multi-line derivation. The
<TT>align</TT> mathematics environment does this. The align
environment allows many columns: each column alternately 
right justified, left justified, and so on: 
<PRE>\begin{align} 
... &amp; ... &amp; ... &amp; ... \\
... &amp; ... &amp; ... &amp; ... \\
... &amp; ... &amp; ... &amp; ... 
\end{align}</PRE> 
gives three rows, four columns, right-left-right-left
justified. 
</p><p>Beware: relational spacing, such as that around "=",
is not done correctly if the relation is at the end of a
right-justified cell!  Instead organise so relations are at
the start of a left-aligned cell.
<P>
Each line will be numbered by LaTeX, unless you specify
<TT>\nonumber</TT> in a lines, or unless you use the * form
of align. See Section 8 in <tt><a
href="Src/maths.tex">Src/maths.tex</a></tt>.</P>

<table><tr><td width=50%>
In the flow of a fluid film we may report
\[\begin{aligned}
  u_\alpha & =  \epsilon^2 \kappa_{xxx} 
  \left( y-\frac{1}{2}y^2 \right),
  &(1)  \\
  v & =  \epsilon^3 \kappa_{xxx} y\,,
  &(2)  \\
  p & =  \epsilon \kappa_{xx}\,.
  &(3)
\end{aligned}\]
Alternatively, the curl of a vector
field \((u,v,w)\) may be written with only
one equation number:
\[\begin{aligned}
  \omega_1 & = 
  \frac{\partial w}{\partial y}
  -\frac{\partial v}{\partial z}\,,
  \\
  \omega_2 & = 
  \frac{\partial u}{\partial z}
  -\frac{\partial w}{\partial x}\,,
  &(4)  \\
  \omega_3 & = 
  \frac{\partial v}{\partial x}
  -\frac{\partial u}{\partial y}\,.
\end{aligned}\]
Whereas a derivation may look like
\[\begin{aligned}
  (p\wedge q)\vee(p\wedge\neg q) 
  & =  p\wedge(q\vee\neg q)
  \quad\text{by distributive law}  \\
   & =  p\wedge T 
   \quad\text{by excluded middle}  \\
   & =  p \quad\text{by identity.}
\end{aligned}\]
</td><td width=50%><pre>
In the flow of a fluid film we may report
\begin{align}
  u_\alpha & =  \epsilon^2 \kappa_{xxx} 
  \left( y-\frac{1}{2}y^2 \right),
  \label{equ}  \\
  v & =  \epsilon^3 \kappa_{xxx} y\,,
  \label{eqv}  \\
  p & =  \epsilon \kappa_{xx}\,.
  \label{eqp}
\end{align}
Alternatively, the curl of a vector
field $(u,v,w)$ may be written with only
one equation number:
\begin{align}
  \omega_1 & = 
  \frac{\partial w}{\partial y}
  -\frac{\partial v}{\partial z}\,,
  \nonumber  \\
  \omega_2 & =  
  \frac{\partial u}{\partial z}
  -\frac{\partial w}{\partial x}\,,
  \label{eqcurl}  \\
  \omega_3 & =  
  \frac{\partial v}{\partial x}
  -\frac{\partial u}{\partial y}\,.
  \nonumber
\end{align}
Whereas a derivation may look like
\begin{align*}
  (p\wedge q)\vee(p\wedge\neg q) 
  & =  p\wedge(q\vee\neg q)
  \quad\text{by distributive law}  \\
   & = p\wedge T 
   \quad\text{by excluded middle}  \\
   & =  p \quad\text{by identity.}
\end{align*}
</pre>
</td></tr></table>

<!-- 
<small>(Some people deprecate the eqnarray environment
because they do not like its physical appearance.  This is
not your concern.  The correct logical structure is
eqnarray, so use it.  Whether a publisher frets over how
eqnarray appears is their worry, not yours.  In my
experience as a copyeditor, authors make many more
typographical mistakes with other cognate environments than
they do with eqnarray.)</small>
 -->





<h3>Subequation numbering</h3>
<p>Another useful facility of <tt>\usepackage{amsmath}</tt>
is the <tt>subequations</tt> environment.  It generates
labels for the enclosed mathematics which are a base number
followed by a,b,c,... in sequence, as illustrated below.</p>

<table><tr><td width=50%>
\[\begin{aligned}
  u_\alpha & =  \epsilon^2 \kappa_{xxx} 
  \left( y-\frac{1}{2}y^2 \right),
  &(5a)  \\
  v & =  \epsilon^3 \kappa_{xxx} y\,,
  &(5b)  \\
  p & =  \epsilon \kappa_{xx}\,.
  &(5c)
\end{aligned}\]
Cross-reference to any individual equation, or to the
collective (5). 
</td><td width=50%><pre>
\begin{subequations}\label{eqf}
\begin{align}
  u_\alpha & =  \epsilon^2 \kappa_{xxx} 
  \left( y-\frac{1}{2}y^2 \right),
  \label{equ}  \\
  v & =  \epsilon^3 \kappa_{xxx} y\,,
  \label{eqv}  \\
  p & =  \epsilon \kappa_{xx}\,.
  \label{eqp}
\end{align}
\end{subequations}
Cross-reference to any individual equation or to the
collective \cref{eqf}. 
</pre>
</td></tr></table>

<p>I once typeset a four line equation and discussed its
physical relevance and implications in terms of the 'first
line', 'second line', and so on.  Unfortunately the
journal's layout editor ruined my discussion by merging the
four lines into two!  I should have used
<tt>subequations</tt> with labels for each of the four
lines, and cross-referenced to the individual labelled
lines.</p>



<h3>Typesetting long expressions</h3>

<P>Typesetting long multi-line expressions is an art
normally too hard for computer recipes, so we usually code
by hand in an <tt>align</tt> environment. Typically typeset
line breaks in long expressions by inserting the code<pre>
\nonumber\\&\quad{}</pre>
Although if a delimiter is 'broken' across the line you 
probably need to insert<pre>
\right.\nonumber\\&\left.\qquad{}</pre>
Insert either of the above on a line by itself in your
source code so that you can easily move the line break
around as needed.

<p><em>Alternatively,</em> if you need to be automatically
flexible about multi-line presentation of long mathematical
expressions, <em>and</em> you do not mind some crude
typesetting, then perhaps invoke <tt>\parbox{}{}</tt> to
help via the following command: </P>
<pre>
\newcommand{\parmath}[1]{\parbox[t]{0.8\linewidth}%
   {\raggedright\linespread{1.4}\selectfont\(#1\)}}
\[
u_1=\parmath{ -2 \gamma  \epsilon^{2} s_{2}+\mu \epsilon^{3}
... +\int_a^b 1-2x+3x^2-4x^3\,dx }
\]
</pre>
Then the above expression is typeset like this:
<p><img src="Share/egParmath.png" alt="example parmath">

<p><small>(The promising <tt>breqn</tt> package is not yet
reliable enough for general use.)</small>




<A NAME="summary"></a> 
<h2>Summary</h2>
Typesetting with mathematics is an art. LaTeX&nbsp;helps
with all its structures, but there are still many decisions
you will have to make. Look to learn more than the basics.

</div>
<?php 
include "footer.php";
?>