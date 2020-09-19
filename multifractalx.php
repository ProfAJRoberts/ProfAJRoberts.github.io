<?php 
$title = "Multifractal estimation---maximum likelihood";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>

 <?php
	 $dir = "../Multifractal";
	 $magic=$_POST['magic'];
	 if ($magic <> "azonal") {
		 print "Sorry, the magic word is incorrect.<br/>\n";
		 exit;
	 }
	 $Code = $_POST['code'];
//check if thelockfile is exist? yes ->wait, no ->create thelockfile.txt and do then release the lock (delete the file)
	 if (file_exists("$dir/thelockfile.txt")){
		 if (time()-filemtime("$dir/thelockfile.txt")>300){
			 print "Sorry, the server is busy. The problem is now reporting to the webmaster.";
			 mail('anthony.roberts@adelaide.edu.au', "Urgent", "Please delete thelockfile.txt, so the Multifractal can work");
			 exit;
		 }else
		 print "Sorry, the analyser is serving another user. Please use your browser back button to submit again after a minute";		
		 exit;
	 }
//create thelockfile before writing data.
	 exec("$dir/lockscript");

	 $filename = "$dir/aaia.txt";
	 if (!$handle = fopen($filename,'w')) {
	 print "Cannot open file ($filename)<br/>\n";
	 exit;
	 }
	 fwrite($handle, "$Code\n");
	 //print "<p/>\n Success, wrote your data to file; attempting execution.";
	 fclose($handle);

	 exec("$dir/sciscript"); 


	$aaoqds="$dir/aaoqds";
	if(!file_exists($aaoqds)){
		$str="<h2> Your data appears invalid, please check your data </h2>".
		"<p/><em>Use your browser's back button to return to the form to rerun your data with any modifications.</em>";
		echo $str;
		unlink("$dir/thelockfile.txt");
	}
	else{
	$str="<h2>My analysis</h2>".

	"<h3>Estimated fractal dimensions</h3>".
	" <pre>";
	echo $str;
	 print file_get_contents("$dir/aaoqds");
	 $str = '</pre>
	<p/>The 2nd row gives estimated dimensions, but I <em>do not recommend</em> the Hausdorf dimension (1st column); instead I <em>do recommend</em> you use the Information or Correlation dimension (2nd and 3rd columns). The 3rd row gives estimated errors (95% confidence); but there is almost no theory underlying these estimated errors.
	<p/>Interpret <em>all</em> reported estimates and errors as giving a feasible range for the fractal dimensions. I can construct an artificial fractal with such a fractal dimension that looks much like your data when I sample the artificial fractal with the same number of points as in your data. What does "look much like" mean? It means that the distribution of the interpoint distances are similar within both the artificial fractal and within your data.
	<h3>Estimated multifractal parameters</h3>
	 Your data best fits a quarternary multiplicative multifractal with the following parameters (each parameter has estimated error underneath, to 95%):
	<ol>
	<li>first column is the overall diameter of the data;
	<li>second column is the scaling ratio from one level of the multifractal to the next.
	</ol>
	<pre>'; echo $str;

	print file_get_contents("$dir/aaodfr");
	$str=
	"</pre>".
	"<p/>The next  fractions give how data points from one square in the construction of the multifractal are distributed among the  subsquares in the next step of the construction. If all fractions are near enough to 1/2^n (n is the dimension of the space in which your data is sampled), then the data is approximately a pure fractal.
	<pre>"; echo $str;

	print file_get_contents("$dir/aaoqmff");

	 //delete thelockfile.
	unlink("$dir/thelockfile.txt");
	
	$str=
	"</pre>".
	"<p/>The full multifractal spectrum may be estimated from the above data. As for the dimensions, the reported errors give a feasible range for each fraction. I can construct a quarternary multiplicative multifractal that, when sampled with the same number of data points as you provided, looks much like your data points. Again 'looks much like' means that there is a similar distribution of the interpoint distances within the artificial quarternary multiplicative multifractal and the within your data.
	"; echo $str;
	$ipaddr = $_SERVER['REMOTE_ADDR'];
    if ($ipaddr == "59.100.200.30") {exit;}
	$datetime = date("l dS F Y h:i:s A");
	print "<p/><em>$datetime</em>\n";
	$message = "$ipaddr $datetime\n";
	$handy = fopen("$dir/aaipaddr.log",'a');
	fwrite($handy,$message);
	fclose($handy);
	mail('anthony.roberts@adelaide.edu.au','webMultifractal',$message);

	}//for else

?>

<?php include 'footer.php';?>

