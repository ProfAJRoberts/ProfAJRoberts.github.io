<?php
$title="Precision 1 club, 1d, and first rebid";
include "header.php";
?>

<h2><a href="index.php">Start</a>
> <a href="1c.php">1c</a>
> <a href="1c-1d.php">1d</a>
</h2>

<dl><dt>
<a href="1c-1d.php">1 diamond</a> 
</dt><dd>
0-7 pts, or impossible negative of 4441 and 8+ pts [then jump in singleton]
</dd><dt>
<a href="1c-1hs2cd.php">1 heart/spade, 2 club/diamond</a> 
</dt><dd>
8+ pts, 5+ suit, bid higher of two suits
</dd><dt>
<a href="1c-2hs.php">2 hearts/spades</a> 
</dt><dd>
4-7 pts, 6 suit
</dd><dt>
<a href="1c-3cdhs.php">3 of suit</a> 
</dt><dd>
4-7 pts, 7 cards.
</dd><dt>
<a href="1c-1nt.php">1 NT</a> 
</dt><dd>
8-10 pts, balanced
</dd><dt>
<a href="1c-2nt.php">2NT</a> 
</dt><dd>
11-13 pts, balanced
</dd><dt>
<a href="1c-3nt.php">3NT</a> 
</dt><dd>
14-15 pts, balanced
</dd></dl>

<h3>If doubled</h3>

<dl><dt>
<a href="1c-dbl-p.php">pass</a> 
</dt><dd>
0-4 pts, or balanced 5 pts
</dd><dt>
<a href="1c-on-nt.php">1NT</a> 
</dt><dd>
6-8 pts
</dd><dt>
<a href="1c-dbl-dbl.php">redouble</a> 
</dt><dd>
9+ pts
</dd></dl>

<h3>If overcalled 2 spades or less</h3>
<dl><dt>
<a href="1c-os-p.php">pass</a> 
</dt><dd>
0-4 pts
</dd><dt>
<a href="1c-os-ss.php">simple suit</a> 
</dt><dd>
5-8 pts, 5+ suit 
</dd><dt>
<a href="1c-os-js.php">jump suit</a> 
</dt><dd>
5-8 pts, 6+ suit
</dd><dt>
<a href="1c-os-nt.php">next NT</a> 
</dt><dd>
6-8 pts, balanced
</dd><dt>
<a href="1c-os-jnt.php">jump NT</a> 
</dt><dd>
9-11 pts, balanced
</dd><dt>
<a href="1c-os-3nt.php">3NT</a> 
</dt><dd>
12-14 pts, balanced
</dd><dt>
<a href="1c-os-dbl.php">double</a> 
</dt><dd>
for penalties
</dd><dt>
<a href="1c-os-cue.php">cue-bid</a> 
</dt><dd>
9+ pts, 2+ suits, 0-1 in opponents suit
</dd></dl>

<h3>If overcall 2NT or more</h3>

<dl><dt>
<a href="1c-oj-dbl.php">double</a> 
</dt><dd>
for penalties
</dd><dt>
<a href="1c-oj-ns.php">3NT or new suit</a> 
</dt><dd>
natural
</dd><dt>
<a href="1c-oj-cue.php">cue-bid</a> 
</dt><dd>
takeout, strong
</dd></dl>




<?php 
include "footer.php";
?>