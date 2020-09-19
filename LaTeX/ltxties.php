<?php
$title="LaTeX: Ties avoid bad line breaks";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

<h1 align=center>Ties avoid bad line breaks</h1>
<div class="newspaper">
Use non-breaking spaces, also called ties, to prevent the
computer breaking lines in bad places. Now, the concept of
"badness" is subjective and so hard to code definite rules.
Consequently, apply the principles with artist taste. I
quote here, near verbatim from Donald Knuth, a list of
examples to show the range of considerations. These apply to
all typesetting, not just LaTeX. 
<p>
<ol>
<li>Use ties in cross-reference: Theorem~A; Algorithm~B;
Chapter~3; Table~4; Programs E and~F. No tie appears after
"Programs" in the last example since it is acceptable to
have "E&nbsp;and&nbsp;F" at the beginning of a
line.<P> 
<p>
<li>Use ties between a person's forenames and between
multiple surnames: Dr.~I.~J. Matrix; Luis~I. Trabb~Pardo;
Peter van~Emde~Boas. It is better to hyphenate a
name rather than to break it between words.<P> 
<p>
<li>Use ties for symbols in apposition with nouns:
base~<I>b</I>; dimension~<I>d</I>; function~<I>f(x)</I>;
string~<I>s</I> of length~<I>l</I>. But compare the last
example with "string~<I>s</I> of length <I>l</I>~or
more".<P> 
<p>
<li>Use ties for symbols in series: 1,~2, or~3; a,~b, and~c;
1,~2,...,~<I>n</I><P> 
<p>
<li>Use ties for symbols as tightly-bound objects of
prepositions: of~<I>x</I>; from 0 to~1; increase <I>z</I>
by~1; in common with~<I>m</I>. This rule does not apply to
compound objects: for example, consider "of u~and~v".<P> 
<p>
<li>Use ties to avoid breaking up mathematical phrases that
involve words: equals~<I>n</I>; less than~<I>e</I>;
mod~2; modulo~<I>p<sup>e</sup></I>; (given~X); when x~grows;
if t~is... Further, "for all large~<I>n</I>" and "for all
<I>n</I>~greater than~<I>n<sub>0</sub></I>". But what you
tie depends upon the context: sometimes "is~15" is correct,
but here prefer "is 15~times the height".
<p>
<li>Use ties when enumerating cases: "(b)~Show that
<I>f(x)</I> is (1)~continuous; (2)~bounded.<P> 
</ol><P> I took this list of examples from pp.&nbsp;89--90
of <EM>Digital typography</EM> by D.&nbsp;E. Knuth, CSLI
Publications, 1999; originally written with M.&nbsp;F. Plass
and appearing in <EM>Software---Practice and Experience</EM>
<B>11</B> (1981), 1119--1184. Also see Chapter&nbsp;14 in
<em>The TeXbook</em> by D.&nbsp;E. Knuth, Amer. Maths Soc.
(1986).</P>

</div>
<?php 
include "footer.php";
?>