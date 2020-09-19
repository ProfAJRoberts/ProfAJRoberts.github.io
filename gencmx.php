<?php
$title="Construct centre manifolds of ordinary or delay differential equations (autonomous)";
$thisfile=__FILE__;
$thanks="<br/>Part of the research<br/>
underlying this web service<br/>
was funded by the<br/> <a href='http://www.arc.gov.au'>
Australian Research Council</a><br/>";
include "header.php";
include "menuside.php";
include "mathjax.html";
?>


<?php 
 $dir="../GENCM"; 
 $magic=$_POST['magic']; 
 if ($magic <> "azalea") { 
 print "Sorry, the magic word is incorrect.<br/>\n"; 
 exit; 
 } 
if (exec("ps |grep reduce|wc -l")>4) { 
   print "Sorry, I seem to be very busy at the moment.<br/>\n"; 
   print "Have patience, wait, and try later.<br/>\n"; 
   exec("ps|grep reduce|mail -s gencmTooManyReduce anthony.roberts@adelaide.edu.au");
   exit; 
} 
if (array_key_exists('freqm_', $_POST)) { 
 $FR = $_POST['freqm_']; 
} 
if (array_key_exists('ff_', $_POST)) { 
 $FF = $_POST['ff_']; 
} 
if (array_key_exists('ee_', $_POST)) { 
 $EE = $_POST['ee_']; 
} 
if (array_key_exists('zz_', $_POST)) { 
 $ZZ = $_POST['zz_']; 
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
 print "ff_:=tp mat(";print"$FF);\n"; 
 print "freqm_:=mat((";print"$FR));\n"; 
 print "ee_:=tp mat(";print"$EE);\n"; 
 print "zz_:=tp mat(";print"$ZZ);\n"; 
 print "toosmall:=$Epsilo;\n"; 
 print "factor $Factor;\n"; 
 print "end;\n"; 
?> 
</pre> 
<em>Use your browser's back button to return to the form to
rerun your data with any modifications.</em>
 
<h3>Writing data to file</h3>
 
<?php 
 $filename = "$dir/cmsys.red"; 
 if (!$handle = fopen($filename,'w+')) { 
 print "Cannot open file ($filename)<br/>\n"; 
 exit; 
 } 
 fwrite($handle, "% $ipaddr $datetime\n"); 
 fwrite($handle, "ff_:=tp mat("); fwrite($handle,"$FF);\n"); 
 fwrite($handle, "freqm_:=mat(("); fwrite($handle,"$FR));\n"); 
 fwrite($handle, "ee_:=tp mat("); fwrite($handle,"$EE);\n"); 
 fwrite($handle, "zz_:=tp mat("); fwrite($handle,"$ZZ);\n"); 
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
 
<p><a href="centreMan.pdf">Download a pdf version<a/> of the
following report<br/> (and/or <a
href="centreMan.zip">download the pdfLaTeX source</a> for
your editing).</p>

<pre> 
<?php 
print file_get_contents("$dir/cmsyso.txt"); 
?> 
</pre> 
 

<?php 
include "gencmInterp.php";
include "footer.php";
?>