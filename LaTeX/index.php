<?php
$title="LaTeX: a quick start to style and finesse";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

<div class="newspaper">

<a name="whylatex"></a> 
<h2>Why LaTeX?</h2>

LaTeX is arguably the premier typesetting package in the
world. Knuth and Lamport have distilled for us the
accumulated wisdom of generations of printers.
<p/>
<a href="https://www.youtube.com/watch?v=OhV9eImAnMU">See video discussion.</a>
 
<h2>Why take my advice?</h2>

Here I distill recommendations from over 30 years experience
of use and abuse of LaTeX. Most importantly, as the founding
editor of the electronic part of ANZIAM Journal, over two
decades I have copyedited a thousand LaTeX articles written
by hundreds of mathematicians and engineers. From this
experience I distill for you the core flexible LaTeX methods
that will serve you well.
<p>
<em>The golden path: use LaTeX logically.</em>
<p>
Further, I base my recommendations to you on reading of many
authors of writing and typesetting skills including books by
Higham, Strunk, Barrass, Day, Zobel, Anderson, Wheildon,
Knuth, Lamport, Gratzer, and the Australian Government Style
Manual.
 
<h2>LaTeX has many strengths</h2>
 
<ul>
<li>The LaTeX system typesets documents with line
and page breaks to maximise readability and appeal
by avoiding as far as possible poor breaks and
hyphenation. 
<p>
<li>The defaults of LaTeX implement best practice for a
reader's comprehension of your material. Read Wendy Priestly's
<em><a href="https://doi.org/10.14742/ajet.2286">
Instructional typographies using desktop publishing
techniques to produce effective learning and training
materials</a> </em>
<p>
<li>LaTeX is simply the best package for documents
containing mathematics. <Q>TeX can print virtually
any mathematical thought that comes into your
head, and print it beautifully.</Q> [Herbert S.
Wilf, 1986] 
<p>
<li> LaTeX is free for virtually every computer in the
world.  You may download the software via a <a
href="https://ctan.org/">CTAN site</a>.
<p>
<li> Beginners can start using LaTeX immediately with the
free online service Overleaf, <a
href="https://www.overleaf.com">
https://www.overleaf.com</a>  
<p>
<li> LaTeX is portable---stick to the standard
commands and everyone can read and exchange
documents: <em>even with the future you.</em>
<p>
<li>Your source file is purely alphanumeric so the
source can be read by eye or posted by e-mail with
no problems associated with different versions or
binary files. 
<p>
<li>Logical LaTeX source empowers easy generation
of many different manifestations of the content:
your style, a colleagues style, slides for
seminars, a journal style, and abbreviated
versions, in reading formats of pdf, postscript,
html, even epub. 
<p>
<li>Weakness: LaTeX is not usually
<small>WYSIWYG</small> (although you can use LyX 
or even easier, <a href="https://www.overleaf.com">Overleaf</a>). 
</ul>
<p>Remember that the 'X' in LaTeX or TeX is pronounced
as a hard sound as in the 'ck' in 'teck'. 
<p>In a document of this size it is not possible to include
everything that you might need to know. If you intend to
make extensive use of LaTeX, then subsequently refer to a
more complete reference. Instead this is a carefully
selected introduction to the foundational elements and
philosophy of using LaTeX with style. 
<p>Online is a fairly complete <A
HREF="Others/latex2e.html">LaTeX2e reference
(162k,html)</A>, suitable for browsing, searching or access
via its index. This reference document is the most useful
thing to keep handy on your disk while you become more
proficient with LaTeX. 
 
<h2>Contents</h2>
We present this website as if you have not used LaTeX
before.  For those who have used LaTeX, I urge you to use
this approach to resynthesise your knowledge into a more
powerful framework (instead of following a 'diffusion
limited aggregation' that is usual when learning LaTeX).
<p>
<img src="Share/170px-Brownian_tree_vertical_large.png">
<a title="Creative Commons Attribution-Share Alike 3.0" 
href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>, 
<a href="https://commons.wikimedia.org/w/index.php?curid=641439">Link</a>
<p>Use the menu at the top-left to navigate to the
following sections. 
<ol>
<li>A quick and dirty start 
<li>Environments 
<li>Cross referencing 
<li>More mathematics 
<li>Figures and tables 
<li>Style and seminars 
<li>Write right for readers 
<li>Art of ties
<li>Use colour
<li>Banned LaTeX!
<li>and possibly more, but not yet. 
</ol>
<a name="other"></a> 
<h2>Other useful information sources</h2>
 
<ul>
<li>Jon Warbrick's <em><A HREF="Others/essential.pdf">
Essential LaTeX&nbsp;(177k,pdf)</A></em> is a useful
introduction to basic documents. 
<p>
<li>But for a quick introduction to mathematics you will
also need <em><a href="Others/el2emath.pdf">Essential
Mathematical LaTeX</a></em> (267k). 
<p>
<li><a href="Others/lshort2e.pdf">The Not so Short
Introduction to LaTeX2e (850k,pdf)</a> by Tobias Oetiker et
al, is a more complete introduction but somewhat longer. But
I prefer <em><a href="Others/maltby.pdf">An introduction to
TeX and friends</em></a> (436k) by Gavin Maltby. 
<p>
<li>Graham Williams compiled brief descriptions of each of
the many support packages and options for LaTeX. See the
vast <a href="https://ctan.org/pkg"> <em>Comprehensive TeX
Archive Network: Packages</em> </a> that lists and links to
over 5,000 LaTeX packages.
<p>
<li>The <a href="https://ctan.org/">Comprehensive TeX Archives
Network (CTAN sites)</a> provides just about everything you ever wanted
to know about LaTeX and all its associated software.  The CTAN
sites are so comprehensive that one rarely can figure out where
to go to find the desired information.  However, search the site
and the catalogue via the <A
HREF="https://ctan.org/search/?ext=new">Search CTAN</A> web page.
</ul>

</div>

<?php 
include "footer.php";
?>