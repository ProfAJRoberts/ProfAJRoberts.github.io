<?php
$dates=date("d-F-Y H:i",filemtime($thisfile));
?>


<html>
<head>
    <title> <?php if (isset ($title)) echo $title;?></title>
<META NAME="Author" CONTENT="Prof Tony Roberts">
<META NAME="Description" CONTENT=<?php if(isset ($title)) echo $title;?>>
<link rel="stylesheet" href="Share/ajr.css" title="MaCPage CSS" type="text/css">
<style>
.newspaper { column-width:20em;
        -moz-column-width:20em;
     -webkit-column-width:20em; }
 td {vertical-align:top;}
</style>
<meta name=viewport content='width=700'>
</head>
<body><a name="top"></a>
<table id="page">
<tr id="header"><td id="left"> <img src="Share/tonyroberts.jpg" alt="Tony Roberts photo"> 
</td><td id="center"> <h1><?php if (isset ($title)) echo $title; ?></h1> 
<H2>by Emeritus Prof A. J. Roberts</H2> 
</td><td id="right"> <img src="Share/tt1.gif" alt="School Image"> 
<br/><img src="Share/ajratua.png">
<!-- <br/><a href="Share/0x36EBA35B.asc">Download my PGP public key</a> -->
</td></tr>
