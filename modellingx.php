<?php
$title="Modelling emergent dynamics in complex systems: your typeset book";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
$magic=$_POST['magic']; 
if ($magic <> "possum") { 
  print "Sorry, the magic word is incorrect.<br/>\n"; 
  exit; 
  } 
?>

 
<h2><a href="RWX/modelling.pdf">Click here to download your book in pdf</a></h2>
 
<?php 
 $dir = "../Modelling"; 
 $filename = "$dir/reqdsecs.tex"; 
 $datetime = date("l dS F Y h:i:s A"); 
 $ipaddr = $_SERVER['REMOTE_ADDR']; 
 if ($ipaddr == "59.100.200.30") {exit;}
 $capack = $_POST['capack']; 
 print "G'day to you at $ipaddr<br/>\n"; 
 
 if (!$handle = fopen($filename,'w+')) { 
    print "Cannot open file ($filename)<br/>\n"; 
    exec("mail -s webModellingFailOpen anthony.roberts@adelaide.edu.au < modellingx.php");
    exit; 
 } 
 fwrite($handle, "% $ipaddr $datetime\n"); 
 fwrite($handle, "\def\youripaddr{"); 
 fwrite($handle, "$ipaddr}\n"); 
 fwrite($handle, "\\$capack"); 
 fwrite($handle, "true\n"); 
 
if (!file_exists("RWX/modelling.pdf")) { 
   print "Sorry, I seem to be very busy at the moment.<br/>\n"; 
   print "Have patience, wait, and try later.<br/>\n"; 
   fclose($handle); 
   exec("mail -s webModellingFailure anthony.roberts@adelaide.edu.au < $dir/reqdsecs.tex");
   exit; 
} 

 
 if (array_key_exists('sec1p2',$_POST)) {fwrite($handle,"\secAlgebraicEqnstrue\n");} 
 if (array_key_exists('sec1p3',$_POST)) {fwrite($handle,"\secPowerODEstrue\n");} 
 if (array_key_exists('sec1p5',$_POST)) {fwrite($handle,"\secOscillatetrue\n");} 
 if (array_key_exists('sec2p1',$_POST)) {fwrite($handle,"\secFlowDestrue\n");} 
 if (array_key_exists('sec2p2',$_POST)) {fwrite($handle,"\secConMasstrue\n");} 
 if (array_key_exists('sec2p3',$_POST)) {fwrite($handle,"\secConMomtrue\n");} 
 if (array_key_exists('sec2p4',$_POST)) {fwrite($handle,"\secStateSpacetrue\n");} 
 if (array_key_exists('sec3p1',$_POST)) {fwrite($handle,"\secCouetteFlowtrue\n");} 
 if (array_key_exists('sec3p2',$_POST)) {fwrite($handle,"\secQuasiStationtrue\n");} 
 if (array_key_exists('sec3p3',$_POST)) {fwrite($handle,"\secIntroduceCMtrue\n");} 
 if (array_key_exists('sec3p4',$_POST)) {fwrite($handle,"\secConstructCMtrue\n");} 
 if (array_key_exists('sec3p5',$_POST)) {fwrite($handle,"\secTaylorVorttrue\n");} 
 #if (array_key_exists('sec3p6',$_POST)) {fwrite($handle,"\secFlexibleCMtrue\n");} 
 if (array_key_exists('sec3p7',$_POST)) {fwrite($handle,"\secIrregularCMtrue\n");} 
 if (array_key_exists('sec4p1',$_POST)) {fwrite($handle,"\secBasicNumericstrue\n");} 
 if (array_key_exists('sec4p2',$_POST)) {fwrite($handle,"\secHolisticIntrotrue\n");} 
 if (array_key_exists('sec4p3',$_POST)) {fwrite($handle,"\secHolisticOneDtrue\n");} 
 if (array_key_exists('sec4p5',$_POST)) {fwrite($handle,"\secBoundaryConditionstrue\n");} 
 if (array_key_exists('sec4p4',$_POST)) {fwrite($handle,"\secChanDispersiontrue\n");} 
 if (array_key_exists('sec1p4',$_POST)) {fwrite($handle,"\secNormalIntrotrue\n");} 
 if (array_key_exists('sec5p1',$_POST)) {fwrite($handle,"\secSeparateCStrue\n");} 
 if (array_key_exists('sec5p2',$_POST)) {fwrite($handle,"\secResonancetrue\n");} 
 if (array_key_exists('sec5p3',$_POST)) {fwrite($handle,"\secInitialCondtrue\n");} 
 if (array_key_exists('sec5p4',$_POST)) {fwrite($handle,"\secHomogenisetrue\n");} 
 if (array_key_exists('sec6p1',$_POST)) {fwrite($handle,"\secDoubleDifftrue\n");} 
 if (array_key_exists('sec6p2',$_POST)) {fwrite($handle,"\secOscillateCMtrue\n");} 
 if (array_key_exists('sec6p3',$_POST)) {fwrite($handle,"\secModulateCMtrue\n");} 
 if (array_key_exists('sec6p4',$_POST)) {fwrite($handle,"\secDoubleDiffCMtrue\n");} 
 if (array_key_exists('sec6p5',$_POST)) {fwrite($handle,"\secTripleChaostrue\n");} 
 if (array_key_exists('sec7p2',$_POST)) {fwrite($handle,"\secAveragingtrue\n");} 
 if (array_key_exists('sec7p3',$_POST)) {fwrite($handle,"\secSeparateSlowFasttrue\n");} 
 if (array_key_exists('sec7p1',$_POST)) {fwrite($handle,"\secBasicStochastictrue\n");} 
 if (array_key_exists('sec7p4',$_POST)) {fwrite($handle,"\secStochasticModelstrue\n");} 
 if (array_key_exists('sec8p1',$_POST)) {fwrite($handle,"\secPoiseFlowtrue\n");} 
 if (array_key_exists('sec8p2',$_POST)) {fwrite($handle,"\secDispersionSVtrue\n");} 
 if (array_key_exists('sec8p3',$_POST)) {fwrite($handle,"\secThinFilmtrue\n");} 
 if (array_key_exists('sec8p4',$_POST)) {fwrite($handle,"\secInertiaFilmtrue\n");} 
# if (array_key_exists('sec9p1',$_POST)) {fwrite($handle,"\secSlowScenariotrue\n");} 
# if (array_key_exists('sec9p2',$_POST)) {fwrite($handle,"\secSubCentreMtrue\n");} 
# if (array_key_exists('sec9p3',$_POST)) {fwrite($handle,"\secWaterWavestrue\n");} 
 if (array_key_exists('sec10p1',$_POST)) {fwrite($handle,"\secOneDIntrotrue\n");} 
 if (array_key_exists('sec10p2',$_POST)) {fwrite($handle,"\secTwoDtrue\n");} 
 if (array_key_exists('sec10p3',$_POST)) {fwrite($handle,"\secEmbeddingtrue\n");} 
 fclose($handle); 
 print "\n Success, wrote your data to file<p/>"; 
 
exec("$dir/thedocx"); 
print "\n Success, created the book I hope---e-mail me if not so.<p/>"; 
?> 
 
<h2>Print the book 2up</h2>
The book is typeset onto A5 size pages (in colour) so please
save forests and print two pages per sheet of paper. Also,
A5 is by far the best standard size for reading
electronically on an iPaD or your computer screen.


<?php 
include "footer.php";
?>