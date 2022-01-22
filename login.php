<?php

include_once('header.php');

?>

<?php

if(isset($_POST['submit'])){
	
	
include_once('config.php');

session_start();

$ref = $_GET['ref'];

$user = $_POST['user'];

$password = md5($_POST['password']);

$sql = " select * from user where user ='$user' && password ='$password'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['user'] = $user;
	
	header("location:admin.php");
	
}else{
	
	echo "Wrong User OR Password";
	
}

}?>

<div class="Category">Admin Login</div>

<div class="Ad">

<form action="" method="post">

User Name:

<br/>

<input type="text" name="user" placeholder="Enter Your User Name" required>

<br/>

Password:

<br/>

<input type="password" name="password" placeholder="**********" required>

<br/>

<br/>

<input type="submit" name="submit" Value="Log In">

</form>

Don't Have Any Account??

<br/>

<a href="registration.php">Registration Now</a>

</div>

<?php

include_once('footer.php');

?>