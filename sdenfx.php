<?php
$title="Normal form of stochastic or deterministic multiscale differential equations";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
include "mathjax.html";
?>
 
<?php 
 $dir="../SDENF"; 
 $magic=$_POST['magic']; 
 if ($magic <> "awhile") { 
 print "Sorry, the magic word is incorrect.<br/>\n"; 
 exit; 
 } 
if (exec("ps |grep reduce|wc -l")>4) { 
   print "Sorry, I seem to be very busy at the moment.<br/>\n"; 
   print "Have patience, wait, and try later.<br/>\n"; 
   exec("ps|grep reduce|mail -s sdenfTooManyReduce anthony.roberts@adelaide.edu.au");
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
<em>Use your browser's back button to return to the form to
rerun your data with any modifications.</em>
 
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

<p><a href="sdenf.pdf">Download a pdf version<a/> of the following report<br/>
(and/or <a href="sdenf.zip">download the pdfLaTeX source</a> for
your editing).</p>

<pre> 
<?php 
print file_get_contents("$dir/sdeo.txt"); 
?> 
</pre> 
 
<?php 
include "sdenfInterp.php";
?>


<?php 
include "footer.php";
?>