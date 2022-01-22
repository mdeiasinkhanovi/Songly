<?php

include_once('header.php');

?>

<div class="Category">Search <?php echo $_GET['search']; ?></div>

<?php

include_once('config.php');

$lyrics = $_GET['search'];

if(isset($lyrics)){


$sql ="SELECT * FROM lyrics WHERE songname >='$lyrics'"; 
	
$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result))
	 
 {
	 
 echo "<a href='lyrics.php?id=$row[songname]'>" . "<div class='list1'>" . $row['songname'] . "</div>" . "</a>";

 
 }	
}

?>

<?php

include_once('footer.php');

?>

