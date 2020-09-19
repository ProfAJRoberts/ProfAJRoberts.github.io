<?php
$title="Holistic discretisation of your three coupled PDEs: output";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

 
<?php 
 $magic=$_POST['magic']; 
 if ($magic <> "winter") { 
 print "Sorry, the magic word is incorrect.<br/>\n"; 
 exit; 
 } 
if (exec("ps |grep reduce|wc -l")>4) { 
   print "Sorry, I seem to be very busy at the moment.<br/>\n"; 
   print "Have patience, wait, and try later.<br/>\n"; 
   exec("ps|grep reduce|mail -s holistic3TooManyReduce anthony.roberts@adelaide.edu.au");
   exit; 
} 
if (array_key_exists('udissipate', $_POST)) { 
 $uDissipate = $_POST['udissipate']; 
} 
if (array_key_exists('udiscof', $_POST)) { 
 $uDiscof = $_POST['udiscof']; 
} 
if (array_key_exists('ufirstfac', $_POST)) { 
 $uFirstfac = $_POST['ufirstfac']; 
} 
if (array_key_exists('usecondfac', $_POST)) { 
 $uSecondfac = $_POST['usecondfac']; 
} 
if (array_key_exists('vdissipate', $_POST)) { 
 $vDissipate = $_POST['vdissipate']; 
} 
if (array_key_exists('vdiscof', $_POST)) { 
 $vDiscof = $_POST['vdiscof']; 
} 
if (array_key_exists('vfirstfac', $_POST)) { 
 $vFirstfac = $_POST['vfirstfac']; 
} 
if (array_key_exists('vsecondfac', $_POST)) { 
 $vSecondfac = $_POST['vsecondfac']; 
} 
if (array_key_exists('wdissipate', $_POST)) { 
 $wDissipate = $_POST['wdissipate']; 
} 
if (array_key_exists('wdiscof', $_POST)) { 
 $wDiscof = $_POST['wdiscof']; 
} 
if (array_key_exists('wfirstfac', $_POST)) { 
 $wFirstfac = $_POST['wfirstfac']; 
} 
if (array_key_exists('wsecondfac', $_POST)) { 
 $wSecondfac = $_POST['wsecondfac']; 
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
 print "udissipate:=$uDissipate;<br/>\n"; 
 print "udiscof:=$uDiscof;<br/>\n"; 
 print "ufirstfac:=$uFirstfac;<br/>\n"; 
 print "usecondfac:=$uSecondfac;<br/>\n"; 
 print "vdissipate:=$vDissipate;<br/>\n"; 
 print "vdiscof:=$vDiscof;<br/>\n"; 
 print "vfirstfac:=$vFirstfac;<br/>\n"; 
 print "vsecondfac:=$vSecondfac;<br/>\n"; 
 print "wdissipate:=$wDissipate;<br/>\n"; 
 print "wdiscof:=$wDiscof;<br/>\n"; 
 print "wfirstfac:=$wFirstfac;<br/>\n"; 
 print "wsecondfac:=$wSecondfac;<br/>\n"; 
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
 fwrite($handle, "udissipate:=$uDissipate;\n"); 
 fwrite($handle, "udiscof:=$uDiscof;\n"); 
 fwrite($handle, "ufirstfac:=$uFirstfac;\n"); 
 fwrite($handle, "usecondfac:=$uSecondfac;\n"); 
 fwrite($handle, "vdissipate:=$vDissipate;\n"); 
 fwrite($handle, "vdiscof:=$vDiscof;\n"); 
 fwrite($handle, "vfirstfac:=$vFirstfac;\n"); 
 fwrite($handle, "vsecondfac:=$vSecondfac;\n"); 
 fwrite($handle, "wdissipate:=$wDissipate;\n"); 
 fwrite($handle, "wdiscof:=$wDiscof;\n"); 
 fwrite($handle, "wfirstfac:=$wFirstfac;\n"); 
 fwrite($handle, "wsecondfac:=$wSecondfac;\n"); 
 fwrite($handle, "stenwidth:=$Stenwidth;\n"); 
 fwrite($handle, "epsilo:=$Epsilo;\n"); 
 fwrite($handle, "factor $Factor;\n"); 
 fwrite($handle, "end;\n"); 
 fclose($handle); 
 print "\n Success, wrote your code to file.<p/>"; 
?> 
 
<h2>Attempting execution</h2>
 
<?php 
exec("$dir/arrive3"); 
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