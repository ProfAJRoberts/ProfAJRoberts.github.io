<?php
$title="Multifractal estimation---maximum likelihood";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

<h3>Due to a server upgrade some years ago,
this web service is not working at the moment.
Contact me by email.</h3>

<FORM ACTION="multifractalx.php" METHOD="POST"> 
<h2>Paste your data points into the box below, then click <input type="submit" value="Submit" name="submit"></h2>
 
<p/>Also enter the magic word "a&nbsp;z&nbsp;o&nbsp;n&nbsp;a&nbsp;l" into this box: <input type="text" name="magic" size=6><p/> 
<p/><table> <tr> <td valign="top">
<TEXTAREA ROWS="24" COLS="30" NAME="code"></TEXTAREA></td> <td valign="top"> 
<p/>
<h3>Enter your data into the box to the left</h3>
 
<ul>
<li>Your data must represent a 1D, 2D or 3D set of points. 
<li>Your data must be <em>one, two or three</em> columns of numbers; 
<li>and no more than <em>400</em> rows; 
<li>then click the submit button above to analyse. 
</ul>
<p/>
<h3>Wait for a minute</h3>
 
<ul>
<li>Your data is analysed after submission: 
<li>taking up to perhaps a minute execution time; 
<li>this is compute intensive, so <em>have patience;</em> 
<li>and you will then <em>see a data summary returned in a web page.</em> 
</ul>
<p/>
<h3>The theory behind the analysis</h3>
 
<ul>
<li>A. J. Roberts and A. Cronin, 
<a href="http://dx.doi.org/10.1016/S0378-4371(96)00165-3">
Unbiased estimation of multi-fractal dimensions of finite
data sets</a>, <em>Physica A</em>, vol.233, pp.867--878,
1996.
<li>I construct many artificial multiplicative multifractals
and remember those that generate fractals that look much
like your data. The reported fractal properties are those of
multifractals that best look like your data.
<li>Be wary that the Hausdorff dimension is very sensitive to 
experimental sampling chance: this article explains,  
<a href="http://arxiv.org/abs/nlin.PS/0512014">
Use the information dimension, not the Hausdorff</a>
<li>I thank Thuc Le for the code to handle data embedded 
in different dimensional space. 
</ul></td></tr></table> 
<p/></FORM> 


<?php 
include "footer.php";
?>