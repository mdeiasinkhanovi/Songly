<?php

include_once('header.php');

?>

<div class="Category"><?php echo $_GET['id']; ?> Lyrics</div>

<?php

include_once('config.php');

$id = $_GET['id'];

if(isset($id)){


$sql ="SELECT * FROM lyrics WHERE songname ='$id'"; 
	
$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result))
	 
 {
	 
	 $song = str_replace("\n" , "<br/>" , $row['song']);
	echo  "<div class='Ad'>" . "<center>" . "<img src='" . $row['albumart'] . "' alt='Album Art'>" . "</center>" . "Song Name : " . $row['songname'] . "<br/>" . "Album : " . $row['album'] . "<br/>" . "Singer : " . $row['singer'] . "<br/>" . "Year : " . $row['year']; 
    echo "<br/>" .  "<br/>" . "<font size='2'>" .  $song . "</font>" . "</div>";

 
 }	
}

?>


<?php

include_once('footer.php');

?>