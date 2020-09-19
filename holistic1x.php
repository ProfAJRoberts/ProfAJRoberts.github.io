<?php
$title="Holistic discretisation of your PDE: output";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

 
<?php 
 $magic=$_POST['magic']; 
 if ($magic <> "spring") { 
 print "Sorry, the magic word is incorrect.<br/>\n"; 
 exit; 
 } 
if (exec("ps |grep reduce|wc -l")>4) { 
   print "Sorry, I seem to be very busy at the moment.<br/>\n"; 
   print "Have patience, wait, and try later.<br/>\n"; 
   exec("ps|grep reduce|mail -s holistic1TooManyReduce anthony.roberts@adelaide.edu.au");
   exit; 
} 
 if (array_key_exists('dissipate', $_POST)) { 
 $Dissipate = $_POST['dissipate']; 
 } 
 if (array_key_exists('discof', $_POST)) { 
 $Discof = $_POST['discof']; 
 } 
 if (array_key_exists('firstfac', $_POST)) { 
 $Firstfac = $_POST['firstfac']; 
 } 
 if (array_key_exists('secondfac', $_POST)) { 
 $Secondfac = $_POST['secondfac']; 
 } 
 if (array_key_exists('stenwidth', $_POST)) { 
 $Stenwidth = $_POST['stenwidth']; 
 } 
 if (array_key_exists('epsilo', $_POST)) { 
 $Epsilo = $_POST['epsilo']; 
 } 
 if (array_key_exists('factor', $_POST)) { 
 $Factor = $_POST['factor']; 
 } 
 $ipaddr = $_SERVER['REMOTE_ADDR']; 
 if ($ipaddr == "59.100.200.30") {exit;}
 $datetime = date("l dS F Y h:i:s A"); 
?> 
 <em>Use your browser's back button to return to the form to rerun your code with any modifications.</em> 
 
<h2>Your input data to be sent for processing</h2>
 
<?php 
 print "% $ipaddr $datetime<br/>\n"; 
 print "dissipate:=$Dissipate;<br/>\n"; 
 print "discof:=$Discof;<br/>\n"; 
 print "firstfac:=$Firstfac;<br/>\n"; 
 print "secondfac:=$Secondfac;<br/>\n"; 
 print "stenwidth:=$Stenwidth;<br/>\n"; 
 print "epsilo:=$Epsilo;<br/>\n"; 
 print "factor $Factor;<br/>\n"; 
 print "end;<br/>\n"; 
?> 
 
<h2>Writing data to file</h2>
 
<?php 
 $dir = "../Holistic"; 
 $filename = "$dir/incoming.red"; 
 if (!$handle = fopen($filename,'w+')) { 
 print "Cannot open file ($filename)<br/>\n"; 
 exit; 
 } 
 if (fwrite($handle, "% $ipaddr $datetime \n") === FALSE) { 
 print "Cannot write to file ($filename)<br/>\n"; 
 exit; 
 } 
 fwrite($handle, "dissipate:=$Dissipate;\n"); 
 fwrite($handle, "discof:=$Discof;\n"); 
 fwrite($handle, "firstfac:=$Firstfac;\n"); 
 fwrite($handle, "secondfac:=$Secondfac;\n"); 
 fwrite($handle, "stenwidth:=$Stenwidth;\n"); 
 fwrite($handle, "epsilo:=$Epsilo;\n"); 
 fwrite($handle, "factor $Factor;\n"); 
 fwrite($handle, "end;\n"); 
 fclose($handle); 
 print "\n Success, wrote your code to file.<p/>"; 
?> 
 
<h2>Attempting execution</h2>
 
<?php 
exec("$dir/arrive1"); 
?> 
 
<h2>Computer algebra analysis and discretisation</h2>
 
<pre> 
<?php 
print file_get_contents("$dir/holpde.log"); 
?> 
</pre> 
 
<h2><a href="RWX/holpde.m">Click to download your Matlab routine for simulation</a></h2>
 
 
<?php 
print "<h3>$datetime</h3>\n"; 
$message = "$ipaddr $datetime\n"; 
$handy = fopen("$dir/ipaddr.log",'a'); 
fwrite($handy,$message); 
fclose($handy); 
?> 


<?php 
include "footer.php";
?>