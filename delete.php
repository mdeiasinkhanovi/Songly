<?php

include_once('header.php');

session_start();

$user = $_SESSION['user'];

if(isset($user)){

$id = $_GET['id'];

if(isset($id)){


$sql ="DELETE FROM lyrics WHERE id=$id"; 
	
$result = mysqli_query($connect,$sql);



echo <<<_END

<div class="Category">Deletion Message</div>

<center><div class="Ad">Deleted Succesfully</div></center>

_END;

}

}else{
	header('location:login.php');
}


include_once('footer.php');

?>