<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<title>:: jamoi.co.uk ::</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="stylesheet.css" type="text/css" rel="stylesheet">
</head>

<body>

<?php include("tophalf.txt"); ?> 

<br>
<br>
A small site covering a few things I'm interested in.
<br>
<br>
Here you'll find: <a href="androidphones.php">a list of all UK Android phones from 2008 to 2013</a>, a <a href="myphones.php">history of phones I've owned</a>, plus the <a href="tunes.php">tunes I've listened to recently</a>, and <a href="twitter.php">my recent tweets</a>.
<br>
<br>
I also <a href="http://jamoiholland.blogspot.com">blog</a> very infrequently!
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<hr noshade="noshade">
<br>
<br>

<div align="center">

<? $num1=rand(0, 7); if($num1<5) { $num2=$num1+1; $num3=$num2+1; $num4=$num3+1; } else { $num2=$num1-1; $num3=$num2-1; $num4=$num3-1; } ?>
<a href="images/0<? echo $num1; ?>.jpg"><img src="images/_0<? echo $num1; ?>.jpg"></a>
<a href="images/0<? echo $num2; ?>.jpg"><img src="images/_0<? echo $num2; ?>.jpg"></a>
<a href="images/0<? echo $num3; ?>.jpg"><img src="images/_0<? echo $num3; ?>.jpg"></a>
<a href="images/0<? echo $num4; ?>.jpg"><img src="images/_0<? echo $num4; ?>.jpg"></a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href='https://alpha.app.net/jamoiholland' rel='me'></a>

</div>

</body>

</html>