<?php
$title="Slow manifold of stochastic or deterministic multiscale differential equations";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>


<?php 
 $dir="../SDESM"; 
 $magic=$_POST['magic']; 
 if ($magic <> "awhile") { 
 print "Sorry, the magic word is incorrect.<br/>\n"; 
 exit; 
 } 
if (exec("ps |grep reduce|wc -l")>4) { 
   print "Sorry, I seem to be very busy at the moment.<br/>\n"; 
   print "Have patience, wait, and try later.<br/>\n"; 
   exec("ps|grep reduce|mail -s sdesmTooManyReduce anthony.roberts@adelaide.edu.au");
   exit; 
} 
if (array_key_exists('xrhs', $_POST)) { 
 $Xrhs = $_POST['xrhs']; 
} 
if (array_key_exists('yrhs', $_POST)) { 
 $Yrhs = $_POST['yrhs']; 
} 
if (array_key_exists('zrhs', $_POST)) { 
 $Zrhs = $_POST['zrhs']; 
} 
if (array_key_exists('epsilo', $_POST)) { 
 $Epsilo = $_POST['epsilo']; 
} 
if (array_key_exists('factor', $_POST)) { 
 $Factor = $_POST['factor']; 
} 
?> 
 
<h2>Your input data to be sent for processing</h2>
 
<pre> 
<?php 
 $ipaddr = $_SERVER['REMOTE_ADDR']; 
 if ($ipaddr == "59.100.200.30") {exit;}
 $datetime = date("l dS F Y h:i:s A"); 
 print "% $ipaddr $datetime\n"; 
 print "xrhs:={";print"$Xrhs};\n"; 
 print "yrhs:={";print"$Yrhs};\n"; 
 print "zrhs:={";print"$Zrhs};\n"; 
 print "toosmall:=$Epsilo;\n"; 
 print "factor small,$Factor;\n"; 
 print "end;\n"; 
?> 
</pre> 
<em>Use your browser's back button to return to the form to rerun your data with any modifications.</em> 
 
<h3>Writing data to file</h3>
 
<?php 
 $filename = "$dir/sde.red"; 
 if (!$handle = fopen($filename,'w+')) { 
 print "Cannot open file ($filename)<br/>\n"; 
 exit; 
 } 
 fwrite($handle, "% $ipaddr $datetime\n"); 
 fwrite($handle, "xrhs:={"); fwrite($handle,"$Xrhs};\n"); 
 fwrite($handle, "yrhs:={"); fwrite($handle,"$Yrhs};\n"); 
 fwrite($handle, "zrhs:={"); fwrite($handle,"$Zrhs};\n"); 
 fwrite($handle, "toosmall:=$Epsilo;\n"); 
 fwrite($handle, "factor $Factor;\n"); 
 fwrite($handle, "end;\n"); 
 print "<p/>\n Success, wrote your data to file; attempting execution."; 
 fclose($handle); 
?> 
 
<h3>Processing data</h3>
 
<?php 
exec("$dir/redscript"); 
exec("$dir/texscript"); 
?> 
 
<h2>Computer algebra result</h2>
 
<p><a href="sdesm.pdf">Download a pdf version<a/> of the following report<br/>
(and/or <a href="sdesm.zip">download the pdfLaTeX source</a> for
your editing).</p>

<pre> 
<?php 
print file_get_contents("$dir/sdeo.txt"); 
?> 
</pre> 
 
<h3>In the above results</h3>
  
<div class="newspaper">
<ul>
<li>Each <tt>xx(i)</tt> denotes the true slow variable X(i)
where the original x(i)=X(i)+(nonlinear modifications).
<li><tt>ou(w,tt,r)</tt> denotes convolution over the
Stratonovich process <tt>w</tt> (not Ito):
<tt>ou(w,tt,r)=exp(rt)*w</tt> where the asterisk <tt>*</tt>
denotes convolution which is done over the past history of
the  autonomous forcing/Stratonovich process <tt>w</tt> as
<tt>r<0</tt>. <li>For explanations and relevant theory, see
my articles <a
href="http://arxiv.org/abs/math.DS/0701623">Normal form
transforms separate slow and fast modes in stochastic
dynamical systems</a> [<a
href="http://dx.doi.org/10.1016/j.physa.2007.08.023">doi:10.
1016/j.physa.2007.08.023</a>] and <a
href="http://eprints.usq.edu.au/archive/00001873/">Computer
algebra derives normal forms of stochastic differential
equations</a>. </ul>
</div>
<?php 
include "footer.php";
?>