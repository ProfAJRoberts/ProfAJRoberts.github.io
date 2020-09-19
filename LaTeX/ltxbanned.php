<?php
$title="LaTeX: Do not use these LaTeX commands";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

<h1 align=center>Do not use these LaTeX commands</h1>
<div class="newspaper">
 The following commands are physical commands. Avoid at all costs. Every use of one of these commands within a document is a failure to use proper logical LaTeX (you know who you are). Instead, think why you want the effect, and then code the logical reason, not the physical command. 
<ul>
<li><TT>\\</TT> (except inside a special environment like tabular, array, or verse) 
<li><TT>\textbf </TT> or <TT>\bf </TT> (usually need <TT>\vec</TT> or sectioning like <TT>\paragraph</TT>) 
<li><TT>\texttt </TT> or <TT>\tt</TT> (usually need a verbatim environment, or <TT>\url</TT> command) 
<li><TT>\textit </TT> or <TT>\it </TT> (use <TT>\emph</TT>) 
<li><TT>\textsf </TT> or <TT>\sf </TT> 
<li><TT>\mathrm </TT> or <TT>\rm </TT> (use <TT>\operatorname{}</TT> for math symbol, or <TT>\text{}</TT> for English) 
<li><TT>\mathscr </TT> (as it is hard for a reader to distinguish between I, J and T, and between C and O---use <tt>\mathcal</tt> instead) 
<li><TT>\tag </TT> (except where absolutely necessary, and even then take a cold shower before deciding)
<li><TT>\eqno </TT> 
<li><TT>\dfrac </TT> 
<li><TT>\displaystyle </TT> 
<li><TT>\hspace </TT> 
<li><TT>\vspace </TT> 
<li><TT>\limits </TT> 
<li><TT>\noindent </TT> 
<li><TT>\newpage </TT> 
<li><TT>\clearpage </TT> 
<li><TT>\linebreak </TT> 
<li><TT>\pagebreak </TT> 
</ul>If you 'know' that what you need involves one of these commands, then define a logical new command in a style file. The new command implements the physical appearance you desire, but within your document you only invoke the logical command. 

</div>
<?php 
include "footer.php";
?>