<?php
$title="LaTeX: Quick start";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

<h1 align=center>A quick start</h1>
<div class="newspaper">

I demonstrate LaTeX&nbsp;on an example document. Let us start with the plain text version of an article I wrote on fractals, <em>The importance of beings fractal</em>. In practise, you create a document in LaTeX&nbsp;from the outset. <P>
<a href="https://www.youtube.com/watch?v=vohSdeSo0ew&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=3&t=0s">See video discussion 11</a>

<A NAME="Document"></a> 
<h2>Document classes</h2>
 
<p>Saving part of the article as text looks like <tt><a href="Src/fractals00.tex">Src/fractals00.tex</a></tt>, with all formatting, mathematics and figures lost. We restore and improve the formatting and the mathematics to produce a superb <A HREF="Src/fractals.pdf">final document (pdf,120K).</A> 
<p>Around the document text that you wish to typeset, you need 
<PRE>\documentclass[12pt]{article} 
\begin{document} 
... 
\end{document} 
</PRE> as in <tt><a href="Src/fractals01.tex">Src/fractals01.tex</a></tt> which we now typeset. 
<p><p>
<b>Use for processing (see <a href="https://en.wikipedia.org/wiki/Comparison_of_TeX_editors"> Comparison of TeX editors</a>)</b>&nbsp; 
<dl> <dt>Easily over the internet<dd> <b><a href="https://www.overleaf.com">Overleaf<a/></b> (free) 
which appears a very good place to get started (however, I have not investigated their reliability nor data management).
<p><dt>Windows PCs <dd>editors 
<a href="http://www.texniccenter.org"> TeXnicCenter</a> (free) or 
<a href="http://www.tug.org/texworks/"> TeXworks</a> (free), and 
the LaTeX&nbsp;processor <a href="http://www.miktex.org">mikTeX</a> (free) 
<p><dt>Unix <dd>editors <TT>Emacs+AuCTeX</TT> (free) and the LaTeX&nbsp;processor tetex (free) 
<p><dt>Macs <dd>perhaps 
<a href="http://pages.uoregon.edu/koch/texshop/"> TeXShop</a> or 
<a href="http://www.tug.org/texworks/"> TeXworks</a> </dl> 
<p><p>
<b>Restore the paragraph structure</b>&nbsp; by introducing a <I>blank line</I> to indicate to LaTeX&nbsp;where one paragraph ends and another begins, as in <tt><a href="Src/fractals02.tex">Src/fractals02.tex</a></tt>. All other line breaks in the source are treated as simply blank characters. 
<p><p>
<b>Other document classes</b>&nbsp; are <TT>report</TT> (for long articles such as a dissertation), <TT>book</TT>, and <TT>letter</TT>. 
<p><p>
<b>Other options</b>&nbsp; are the smaller sizes of fonts: <TT>[11pt]</TT>; or none at all which gives 10pt. Additional options may be provided, such as <TT>a4paper</TT> or <TT>twocolumn</TT>, within the [] and separated by commas. <P>For most purposes I recommend one of the following:</P> 
<ul>
<li><TT>\documentclass[12pt,a4paper]{article}</TT> for many purposes; 
<li>save paper with <TT>\documentclass[a4paper,twocolumn]{article}</TT> for an easily readable newspaper type format; 
<li>e-book friendly typesetting, and to draft onscreen easily, and save paper by printing two pages per sheet of A4 paper, use <TT>\documentclass[12pt,a5paper]{article}</TT>, followed by <tt>\usepackage[a5paper,margin=6mm]{geometry}</tt>. This gives the same line width as the default for a4paper. 
</ul>As you go through this, try some of these alternatives to see how LaTeX&nbsp;easily reformats the document to changing needs.<p> 



<A NAME="Sectioning"></a> 
<h2>Sectioning</h2>

<a href="https://www.youtube.com/watch?v=EKRt_hM9-pQ&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=4&t=0s">See video discussion 12</a>

 <P>The sections and subsections need to be typeset clearly. These are indicated by the </P> 
<PRE>\section{section-name}</PRE> <P>and </P> 
<PRE>\subsection{subsection-name}</PRE> <P>commands as in <tt><a href="Src/fractals03.tex">Src/fractals03.tex</a></tt>.</P> 
<P>LaTeX&nbsp;automatically numbers the sections and subsections, so do not number them yourself.</P> 
<P>The backslash or 'slosh' introduces a command in LaTeX, usually followed by an argument in enclosed in braces.</P> 
<P>Other sectioning commands are <TT>\chapter</TT>, <TT>\subsubsection</TT>, and <TT>\paragraph</TT>.</P> 

<h4>When needed, use logical 'hooks'</h4>
This is one example. In typesetting assignments you want to
label each question and part: how can we adapt the
sectioning commands? Answer: redefine the hooks that number
each section and subsection (line breaks optional).
<pre>
\renewcommand{\thesection}
    {Question \arabic{section}}
\renewcommand{\thesubsection}
    {\thesection, Part (\alph{subsection})}
\renewcommand{\thesubsubsection}
    {\thesubsection\roman{subsubsection}}
</pre>
Try it and see.  The 'hook' <tt>\thesection</tt> typesets
the section numbers (with <tt>\arabic{section}</tt>), so
here change it via <tt>\renewcommand</tt> to include the
word "Question" in the section titles, and similarly for the
others. <em>Occasionally</em> circumstances arise to do this
sort of change to the physical appearance of the correct
logical command.


<A NAME="Titles"></a> 
<h2>Titles</h2>

<a href="https://www.youtube.com/watch?v=tc5L9hTiw2s&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=5&t=0s">See video discussion 13</a>
<p>
 There are also special commands for a title. The format is 
<PRE>\title{title-text} 
\author{yours truly\\address} 
\maketitle 
</PRE> as in <tt><a href="Src/fractals04.tex">Src/fractals04.tex</a></tt>. <P> Observe that LaTeX&nbsp;uses today's date. Override with the <TT>\date{any-date}</TT> command anywhere before the <TT>\maketitle</TT>. (Good practice is to use <tt>\date</tt>, comment on the version, and keep the version history as comments.)</P> 
<p>Multiple authors should be separated by <tt>\and</tt> within <tt>\author{...\and...}</tt></p>
<p>Addresses and thanks by author(s) usually appear as footnotes by using <tt>\thanks{...}</tt> immediately after the author(s).</p>

<P>Not only are the slosh, '\', and the braces, '{' and '}', special characters to LaTeX, so is the percent sign '%'. It causes LaTeX&nbsp;to ignore the rest of the line, so we can comment the document if needed. Other special characters are: </P> 
<ul>
<li>the dollar, '$'; 
<li>the ampersand, '&amp;'; 
<li>the underscore, '_'; and 
<li>the hash, '#'. 
</ul>
<p><P>To get any of these last seven characters (but not &quot;\&quot;) to <em>appear</em> in the final typeset document, just precede them by a slosh (as now seen in the name of the department).</P> 
<p><P> The double slosh '\\' is reserved to force a line break in certain circumstances---use it sparingly. </P> 


<A NAME="Font"></a> 
<h2>Font styles</h2>
<a href="https://www.youtube.com/watch?v=ISr54HBTaAA&list=PLAvDA9VSF6oxwGHA2ELDnaSFlJvwZPT6p&index=6&t=0s">See video discussion 14</a>
<p>
LaTeX&nbsp;typesets most of a document in a roman font (Computer Modern). Section and subsection titles are typeset in bold face. LaTeX&nbsp;has other font styles available. These are invoked by the following commands with argument the text to be affected: </P> 
<p>
<ul>
<li><TT>\emph{...}</TT> invokes italic for emphasis (and sometimes addresses); 
<li><TT>\texttt{...}</TT> typesets its argument in a fixed width teletype-like font, useful for code fragments and the like; 
<li><TT>\textbf{...}</TT> typesets bold face, but avoid and instead prefer logical commands. 
</ul>
<p>These font styles are mainly used in the following way: 
<PRE>\emph{this is in italic}, but this is not.</PRE> as in <tt><a href="Src/fractals05.tex">Src/fractals05.tex</a></tt>. 
<p>These style changes are <I>cumulative</I> so you could have italic bold by <TT>\emph{\textbf{...}}</TT> (provided the fonts are actually available on your system!). 


<A NAME="Page"></a> 
<h2>Page headings and footings</h2>
 
<p>LaTeX's default is to number each page, centered in the
footing. A more descriptive running page header is obtained
by including the command <PRE>\pagestyle{headings}</PRE> in
the preamble (that bit before the <TT>\begin{document}</TT>
in which the title and author may also go), as in <tt><a
href="Src/fractals06.tex">Src/fractals06.tex</a></tt>. To
see the headings we need a wider margin, at least 13mm. 
<p>You may design your own running header using
<TT>\pagestyle{myheadings}</TT> in conjunction with the
<TT>\markright{some-text}</TT> command. 

<A NAME="End"></a> 
<h2>Summary</h2>
 Leave the details of typesetting to LaTeX. Just tell
 LaTeX&nbsp;the <em>logical structure</em> of your document
 and it will do the rest. Resist the temptation to meddle
 unless you have a very good reason. 
<p>
<p>(The same advice holds for HTML---markup the logical structure.) 
<p>For example: you are tempted to use all capitals; ask
why? For a section header use <tt>\section{}</tt>, for
emphasis use <tt>\emph{}</tt>, for a three letter acronym
(TLA) perhaps, but <tt>\textsc{tla}</tt> is better. 
<p/>
For another example: you are tempted to underline; ask why?
For emphasis use <tt>\emph{}</tt>, for a web address use the
url package and <tt>\url{}</tt>. <em>Avoid habits generated
by 19th century technology of typewriters; move to the logic
of the 21st century.</em>
<p><q>The only thing that never looks right is a rule. There
is not in existence a page with a rule on it that cannot be
instantly and obviously improved by taking the rule out.</q>
[George Bernard Shaw, <EM>The Dolphin</EM>, 1940] 

<h4>Abandon that most dangerous thought, "I like"</h4>   What you
like about typeset appearance is irrelevant.  We typeset
documents to communicate ideas with colleagues and
strangers.  We need to typeset in a way that is most
effective for others to comprehend: this is not the same as
what you like, nor indeed is it the same as what others
profess to like.  Instead, in general the most effective way
to communicate for others to comprehend is to use, without
meddling, the default logical structures that LaTeX provides.

</div>

<?php 
include "footer.php";
?>