<?php
$dates=date("d-F-Y H:i",filemtime($thisfile));
$addr=$_SERVER['HTTP_HOST'];
$serv='tuck.adelaide.edu.au';
$servaddr='http://tuck.adelaide.edu.au/';
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
<!-- either of following makes iphone behaviour better 
https://www.thesitewizard.com/css/mobile-friendly-responsive-design.shtml
<meta name="viewport" content="width=device-width, initial-scale=1">  
-->
<meta name=viewport content='width=700'>

</head>
<body><a name="top"></a>
<table id="page">
<tr id="header"><td id="left" width="160px"> <img src="Share/ajr.jpg" alt="Tony Roberts photo"> 
</td><td id="center"> 
<h1><?php if (isset ($title)) echo $title; ?></h1> 
<H2>by Emeritus Prof. A. J. Roberts<?php if (isset ($etal)) echo $etal; ?></H2> 
</td><td id="right"> 
<!-- <img src="Share/tt1s.gif" alt="School Image"> -->
<a href="http://m.maploco.com/details/7485mna8">
<img style="border:0px;" src="http://www.maploco.com/vmap/s/9454688.png" 
title="Locations of Site Visitors"/></a>  
<br/><img src="Share/ajratua.png">
</td></tr>
