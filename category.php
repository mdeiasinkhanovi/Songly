<?php

include_once('header.php');

?>

<div class="Category"><?php echo $_GET['category']; ?></div>

<?php

include_once('config.php');

$lyrics = $_GET['category'];

if(isset($lyrics)){


$sql ="SELECT * FROM lyrics WHERE category ='$lyrics'"; 
	
$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	 
$id = $row['id'];
	 
$songname = $row['songname'];

$album = $row['album'];

	 
 echo <<<_END
 
<a href="lyrics.php?id=$songname"><div class="list1">$songname - $album</div></a>

_END;

echo <<<_END
 
<a href="edit.php?id=$id">Edit</a>

<a href="delete.php?id=$id">Delete</a>

_END;


 
}	
 
}

?>

<?php

include_once('footer.php');

?>

