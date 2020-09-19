<?php
$title="Web Reduce: Your computer algebra output";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

 
<?php 
 $dir = "../Reduce"; 
 $magic=$_POST['magic']; 
 if ($magic <> "autumn") { 
 print "Sorry, the magic word is incorrect.<br/>\n"; 
 exit; 
 } 
if (exec("ps |grep reduce|wc -l")>4) { 
   print "Sorry, I seem to be very busy at the moment.<br/>\n"; 
   print "Have patience, wait, and try later.<br/>\n"; 
   exec("ps|grep reduce|mail -s reduceTooManyReduce anthony.roberts@adelaide.edu.au");
   exit; 
} 
 $Code = $_POST['code']; 
?> 
 <em>Use your browser's back button to return to the form to rerun your code with any modifications.</em> 
 
<?php 
print "<h3>Your code</h3>\n<pre>\n$Code\n</pre>\n"; 
?> 
 
<?php 
 $filename = "$dir/aa.txt"; 
 if (!$handle = fopen($filename,'w+')) { 
 print "Cannot open file ($filename)<br/>\n"; 
 exit; 
 } 
 fwrite($handle, "$Code\n"); 
 print "\n Success, wrote your code to file; attempting execution.<p/>"; 
 fclose($handle); 
?> 
 
<?php 
exec("$dir/aared"); 
exec("head -150 $dir/aaout.txt >$dir/aaous.txt"); 
?> 
 
<h2>Your Reduce output (first 150 lines)</h2>
 
<pre> 
<?php 
print file_get_contents("$dir/aaous.txt"); 
?> 
</pre> 
 
<?php 
$ipaddr = $_SERVER['REMOTE_ADDR']; 
 if ($ipaddr == "59.100.200.30") {exit;}
$datetime = date("l dS F Y h:i:s A"); 
print "<h3>$datetime</h3>\n"; 
$handy = fopen("$dir/ipaddr.log",'a'); 
fwrite($handy,"$ipaddr $datetime\n") 
?> 

<?php 
include "footer.php";
?>