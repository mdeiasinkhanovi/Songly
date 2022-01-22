<html>

<head
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link type="image/png" rel="icon" href="icon.png">
	
	<link href="style.css" rel="stylesheet" type="text/css">

</head>

<?php 

include_once('config.php');

?>

<body>

<div class="limiter">

<div class="Top">

<a href="home.php">

<font color="#FFFFFF" size="6">

<b>Songly.Cf</b>

</font>

</a>

</div>

<table  cellspacing="0" cellpadding="0" width="100%">

<td>

<a href="home.php">

<div class="Tab1">

Home

</div>


</a>

</td>

<td>

<a href="admin.php">

<div class="Tab2">

Admin

</div>

</a>

</td>

<td>

<a href="about.php">

<div class="Tab1">

About

</div>

</a>

</td>

</table>

<center>

<div class="Ad">

<form action="search.php" method="get">

<input type="text" name="search" placeholder="Search Your Lyrics" required>

<br/>

<input type="submit" name="submit" value="Search">

</form>

</div>

</center>
