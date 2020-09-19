<?php
$title="Web browser interface to Reduce Computer Algebra";
$thisfile=__FILE__;
include "header.php";
include "menuside.php";
?>
 
<h2>Paste a Reduce program into the box below</h2>
 <FORM ACTION="reducex.php" METHOD="POST"> <TEXTAREA ROWS="16" COLS="60" NAME="code"></TEXTAREA> <p/> 
 Enter the magic word "a&nbsp;u&nbsp;t&nbsp;u&nbsp;m&nbsp;n" into <input type="text" size=6 name="magic"><br/> then click <input type="submit" value="Submit" name="submit"> 
 
<h2>Wait for a few seconds</h2>
 
<ul>
<li>Your code is executed after submission: 
<li>it is limited to a few seconds execution time; 
<li>and limited to a medium amount of memory; 
<li>and limited output is returned in a web page to be shown soon. 
</ul></FORM> 

<?php 
include "footer.php";
?>