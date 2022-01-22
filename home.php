<?php

include_once('header.php');

?>

<div class="Category"><b>Latest Lyrics</b><span><a href="list.php"><b>Lyrics Categories</b></a></span></div>

<?php

include_once('config.php');

$lyricsperpage = 10;

if(isset($_GET['page']) && !empty($_GET['page'])){
	
$currentpage = $_GET['page'];

}else{
	
$currentpage = 1;

}

$start = ($currentpage * $lyricsperpage) - $lyricsperpage;

$sql = "SELECT * FROM lyrics";

$allyrics = mysqli_query($connect, $sql);

$totalyrics = mysqli_num_rows($allyrics);

$lastpage = ceil($totalyrics/$lyricsperpage);

$firstPage = 1;

$nextpage = $currentpage + 1;

$previouspage = $currentpage - 1;

$sql1 = "SELECT * FROM lyrics ORDER BY id DESC  LIMIT $start, $lyricsperpage";

$result = mysqli_query($connect, $sql1);


?>

<?php

while($row = mysqli_fetch_array($result)){
	
   $songname = $row['songname'];
   
   $album = $row['album'];
   
   $singer = $row['singer'];
   
   $albumart = $row['albumart'];
   
echo <<<_END

<a href="lyrics.php?id=$songname">

<div class="list">

<div class="photo"  style="background-image: url('$albumart')"> </div>

<div class="listing">

<h3>$songname</h3>

<div class="album">$album</div>

<br/>
Singer : $singer

</div>

</div>

</a>

_END;


}

?>

 <div style="clear:both"></div>

<center>

<?php


echo "<a class='button' href='?page=" . $firstPage . "'>First</a>";


if($previouspage >=1){

	echo "<a class='button' href='?page=" . $previouspage . "'>" . "Previous" . "</a>";
	
}else{
	
	echo "<div class='button'>" . "Previous" . "</div>";
	
}


if($nextpage<=$lastpage){
	
	echo "<a class='button' href='?page=" .$nextpage . "'>" . "Next" . "</a>";
	
}else{
	
	echo "<div class='button'>" . "Next" . "</div>";
	
}


if($lastpage>=2){
	
   echo "<a class='button' href='?page=" . $lastpage . "'>Last</a>";
	
}else{
	
	echo "<p class='button'>" . "Last" . "</p>";
	
}


 ?>
 
 </center>
 
 <div style="clear:both"></div>

<?php

include_once('footer.php');

?>