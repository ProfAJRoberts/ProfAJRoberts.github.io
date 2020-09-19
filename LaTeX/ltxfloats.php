<?php
$title="LaTeX: Figures and tables";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

<h1 align=center>Figures and tables</h1>
<div class="newspaper">

<P>Tables and figures are examples of entities that 'float'.
They generally form too large an entity to be conveniently
placed just anywhere on a page. Instead LaTeX&nbsp;waits so
that it can put them in a convenient place: the top of a
page, the bottom of a page, or on a page by itself. 
<P><EM>Let LaTeX float tables and figures, do not try to
insist that you know better.</EM></P>
<p><P>From research by Colin Wheildon: <QUOTE>"Seventy-seven
percent said articles in which body type jumped over an
illustration ..., contrary to the natural flow of reading,
annoyed them. The natural expectation was that once a
barrier such as an illustration ... was reached, the article
would be continued at the head of the next leg of
type."</QUOTE></P>

<a href="https://www.youtube.com/watch?v=W-mxzy1uELc&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=7&t=0s">See video discussion 41</a><p>

 
<A NAME="Tables"></a> 
<h2>Tables</h2>
<p><P>To request LaTeX&nbsp;to include a table use the
<TT>table</TT> environment: </P>
<PRE>\begin{table} 
 \caption{...} 
 \label{...} 
 ... 
 instructions for typesetting the table 
 (usually tabular within a center environment,
 or array within a displaymath environment)
 ... 
\end{table}</PRE> 
<P>See the table of fractal dimensions at the end of <tt><a
href="Src/fractals31.tex">Src/fractals31.tex</a></tt>. In
the first run through, LaTeX&nbsp;cannot find room on page 5
for the table, and so places it on page 6 by itself. In the
second run, the Table of Contents has pushed more material
into the document, and now the table is placed at the top of
the page.</P> 
<ul><li>
If your data is mostly text with some mathematics, then
typeset in the <a href="ltxenviron.php#Tabular">tabular
environment</a> within a center environment.  Typeset
mathematical entries within <tt>$...$</tt>, or better is
<tt>\(...\)</tt>.
</li><li>
If your data is mostly mathematics, even if simply numbers,
then typeset in the array environment within a displaymath
environment (the arguments of the array environment are the
same as those of the <a
href="ltxenviron.php#Tabular">tabular environment</a>). 
Typeset the textual entries within <tt>\text{...}</tt>, or
if relatively long then <tt>\parbox{width}{\raggedright
...}</tt>.
</li></ul>
<P>My table has few drawn lines: this is best practice. Let
the grid structure of a table work for you without the
distraction of zillions of horizontal and vertical lines.
Use lines sparingly.</P> 
<P><em>For tables of numbers, only report as few as digits
as possible to convey the message.</em> 
<P>For example, many authors report "errors" to four
significant digits, and almost always there is no
justifiable reason.  As copyeditor I truncate to two digits,
but really one significant digit is almost always sufficient
for errors.  Do not report more.</P> 

<P>From James Hartley, <em>Academic writing and
publishing</em>: <QUOTE>"round off the numbers so that
readers can make meaningful comparisons more
easily"</QUOTE></P>
<P>One may include
a List of Tables in the document with the command
<TT>\listoftables</TT>.</P>




<A NAME="Figures"></a> 
<h2>Figures</h2>
<a href="https://www.youtube.com/watch?v=9RbbJcJr3ck&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=7&t=0s">See video discussion 42</a><p>

<P>Just as for tables, somewhere near where you need the
figure, usually at the start of the first paragraph that
discusses the figure, include the figure environment 
<PRE>\begin{figure} 
 \centering 
 ... graphic LaTeX code ... 
 \caption{...} 
 \label{...} 
\end{figure}</PRE> 
The example<tt><a href="Src/fractals34.tex">
Src/fractals34.tex</a></tt> shows how to
<tt>\usepackage{graphicx}</tt> in order to include a figure
of the lego fractal jpeg picture<tt><a
href="Share/sflower.jpg"> Share/sflower.jpg</a></tt>.

<p>In <tt>twocolumn</tt> documents a figure is usually
placed within one column, but the <tt>figure*</tt>
environment instead spreads a figure over both columns.

<p>Of course, mostly scientific or engineering graphics
are not pictures, but plots.  There are several good
possibilities for the LaTeX code that includes a plotted
graph, and analogous possibilities with other computing languages:
<ul><li>
draw graph in Matlab, Octave, R, etc, export to postscript,
convert to pdf, include in the LaTeX;
</li><li>
draw graph in Matlab or Octave, export to LaTeX code, input
the code into your source;
</li><li>
or code 'pgfplots' commands yourself directly into your LaTeX source.
</li></ul>
Let's look at these alternatives in reverse order---after four other comments.
</p>

<P>One may include a List of Figures in the document with
the command <TT>\listoffigures</TT>.</P>


<p>
One could alternatively put the <tt>\caption{}</tt> and
<tt>\label{}</tt> <em>above</em> the graphic, as then
hyperlinks to the figure will move to a better position. We
are already used to titles being above graphics, and I know
of no research finding that captions above graphics hinder
comprehension by a reader. 


<h4>Small graphics</h4>
<p>
Place small graphics (or indeed anything) into the margin
with the command <tt>\marginpar{...}</tt>, and you may need
to change its width via say
<pre>\setlength{\marginparwidth}{6em}</pre> 
For example, <a
href="Share/tonyroberts.jpg">download my thumbnail
picture</a> and include it in the margin with
<pre>\marginpar{\includegraphics{tonyroberts}}</pre>
For best results with marginpars include the preamble
<tt>\usepackage{marginfix}</tt>.
<!--For example, try
the pgfplots (described next)
<pre>\marginpar{\begin{tikzpicture}
\begin{axis}[footnotesize,axis lines=middle
,xlabel=$x$,ylabel={$16x-x^3$}] 
\addplot+[no marks] {16*x-x^3};
\end{axis}\end{tikzpicture}}</pre>
-->
</p><p>
Alternatively, the <tt>wrapfig</tt> package empowers us to
wrap text around a graph, or indeed around any rectangular
area of typeset material, but use only with care, and also
with the <tt>needspace</tt> package.
</p>

<h4>Avoid animations, movies and VR-3D</h4>
It is possible to include animations, movies, and
interactive 'virtual reality' 3D graphics within pdf
documents via LaTeX (<a
href="http://journal.austms.org.au/ojs/index.php/ANZIAMJ/article/downloadSuppFile/1554/630">see examples</a>). 
However, many pdf readers do not support them, and almost no
journal supports their inclusion. So&nbsp;avoid&nbsp;:(



<A NAME="pgfplots"></a> 
<h3>Stunning graphs with pgfplots</h3>
<a href="https://www.youtube.com/watch?v=sqoYO37tN8k&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=7&t=0s">See video discussion 43</a>

<P>Obtain stunning quality graphics within LaTeX using
 the <a
 href="http://sourceforge.net/projects/pgfplots/">pgfplots
 package</a> by invoking in the preamble 
 <pre>\usepackage{pgfplots}
\pgfplotsset{compat=newest}</pre>
To get started, <a href="pgfplotBasics.pdf">see this introduction,</a>
then see a host of examples at <a href="http://pgfplots.net">PGFPlots.net</a>
 </p><p>
The cost of these beautiful pgfplots is a major
slow down of LaTeX&nbsp;as it draws the graphs 
(although one can 'externalize' and recover the speed).
 </p><p>
Alternatively, draw the graph in Matlab or Octave, then
export to pgfplots-LaTeX code with 
<a href="https://au.mathworks.com/matlabcentral/fileexchange/22022-matlab2tikz-matlab2tikz">
 matlab2tikz()</a> function.   I recommend invoking with something like  <pre>
cleanfigure;
matlab2tikz('filename.tex','showInfo',false ...
,'noSize',true,'parseStrings',false,'showWarnings',false ...
,'extraCode','\tikzsetnextfilename{filename}' ...
,'extraAxisOptions',string ...
)
</pre>
 </P>

Currently (2020) there is a bug in <tt>matlab2tikz()</tt>.
If you get unwanted legends appearing in your plots, then
edit line 1064 of <tt>matlab2tikz.m</tt> by replacing
"<tt>legendhandle = legend(axisHandle);</tt>" with
"<tt>legendhandle = axisHandle.Legend;</tt>"   This
replacement should omit the unwanted legends for you.
<p>








<A NAME="epspdf"></a> 
<h3>Graphs via postscript and pdf</h3>
<a href="https://www.youtube.com/watch?v=7O_2Qo5_xPQ&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=7&t=0s">See video discussion 44</a>

<P>The usual way to include a figure in LaTeX is, as
follows, to draw the graph in Matlab, Octave, R, etc, export
to postscript, convert to pdf, include in the LaTeX.</P> 

<P><EM>Do not export to bit-image formats such as .png,
.gif, .tiff, or .jpg</EM></P>

<ul>
<li>Create a <B>postscript</B> file of the drawing from
whatever application is being used to generate the
figure---most publishers still require postscript figures so
do not bother trying to avoid this step.
For example, <tt><a
href="Src/cantor.m">Src/cantor.m</a></tt> and <tt><a
href="Src/koch.m">Src/koch.m</a></tt> are Matlab programs
that create postscript graphs in files <tt><a
href="Src/cantor.eps">Src/cantor.eps</a></tt> and <tt><a
href="Src/koch.eps">Src/koch.eps</a></tt> (prefer the
command <tt>print -depsc2 filename</tt> ).
<li>However, pdfLaTeX&nbsp;does not support postscript
graphics! In order to <em>seamlessly</em> be able to use
pdfLaTeX&nbsp;or ordinary LaTeX&nbsp;(especially as
collaborators sometimes use the other one), and produce a
<em>quality</em> graphic, convert to pdf using the public
domain <TT>ps2pdf</TT> program (so you have two copies of
the graphics file, an <TT>.eps</TT> file and a <TT>.pdf</TT>
file). For example, the two files <tt><a
href="Src/cantor.pdf">Src/cantor.pdf</a></tt> and <tt><a
href="Src/koch.pdf">Src/koch.pdf</a></tt>
<li>If the graphic is photograph-like, either because it is
a photograph or because it is a surface plot with smooth
graduations, then convert to <tt>jpeg</tt> rather than
<tt>pdf</tt>.
<li>Then place in the preamble the commands 
<PRE>\usepackage{graphicx}</PRE> 
<li>Somewhere near where you want the figure, include the figure environment 
<PRE>\begin{figure} 
 \centering 
 \includegraphics{...} 
 \caption{...} 
 \label{...} 
\end{figure}</PRE> 
where the argument of the <TT>\includegraphics</TT> command
is the filename (without the extension).
<p>
<li>Or use this to scale the picture up/down, <EM>but only a
little</EM>, 
<PRE>\begin{figure} 
 \centering 
 \includegraphics[scale=0.9]
     {...} 
 \caption{...} 
 \label{...} 
\end{figure}</PRE> 
</ul>
<P> See the two figures in <tt><a
href="Src/fractals32.tex">Src/fractals32.tex</a></tt> </P>
<P> The <TT>scale=0.9</TT> scales the figure to 90% of the
size of the drawn graphic: scaling between 0.9--1.1 is fine;
scaling between 0.8--1.2 is probably OK; but avoid any more
drastic scalings.
</P> 
<P><EM>I strongly urge you to generate the graphics at about
the same size as they are to appear.</EM> 
<p>This sizing is so that
the title, label and legend information is readable
and the line thicknesses are credible (<a
href="ScreenShot.png">avoid grotesque scaling such as
this</a>), or this <a href="egAppallingFigure.pdf">even
worse example</a>. 
<UL><LI>Most journals, and good dissertation styles, typeset
to a text-width of about 14cm, so:
<UL><LI> a single graph must be no more than 14cm wide;
</LI><LI> two side-by-side graphs no more than 7cm wide each;
</LI><LI> and so on.
</LI></UL>
</LI><LI>For two column journals or proceedings, a single
graph, to fit into a single column, must be no more than
about 9cm wide.
</LI></UL>

<p>For two examples: 
<ul><li> <tt><a href="Src/cantor.m"> Src/cantor.m</a></tt>
and <tt><a href="Src/koch.m"> Src/koch.m</a></tt> show how
to use Matlab's <tt>clf(), subplot('position',[.2 .2 .55
.55])</tt> commands to generate graphics that are close to
the text width, and <tt>subplot(3,3,1)</tt> for close to
half the text width, respectively;
</li><li>for Maple, an internet search suggests that before
you issue a plot command, invoke 
<pre>plotsetup(postscript, 
plotoutput=`image.ps`,plotoptions=
`color,portrait,height=300,width=300`);
</pre></li></ul></P> 
<P><EM>Always code into a script the commands that generate
a graphic.</EM> 
<ul><li>
Even though in exploring how to generate a graphic you may
use a graphical user interface, ultimately <em>reproducible
research</em> requires that you must codify the process,
including codifying the `print' command that actually
outputs the tex/eps/pdf/jpeg file.
</li><li>
Ensure your graphics are traceable back to the source file
that generated them. I recommend prefixing the name of the
script file to the name of the graphic file.  That is, if a
script named <tt>abc.*</tt> generates a graph on topic
<tt>xyz</tt>, then name the graphic file <tt>abcxyz.*</tt> 
For example, if using Matlab/Octave, then invoke the function
<tt>mfilename</tt> as in 
<pre>print('-deps',[mfilename 'xyz'])</pre>
</li></ul>

</div>

<?php 
include "footer.php";
?>