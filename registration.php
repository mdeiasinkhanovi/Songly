<?php

include_once('header.php');

if(isset($_POST['submit'])){

$user = $_POST['user'];

$password = md5($_POST['password']);

$sql = "INSERT INTO user(user,password)VALUES ('$user','$password')";


mysqli_query($connect ,$sql);

echo "Registration Succesfull"."<a href='login.php'>"." Login "."</a>"."Now";


}

?>

<div class="Category">Registration</div>

<div class="Ad">

<form action="" method="post">

User Name:

<br/>

<input name="user" type="text" placeholder="Enter Your User Name" required>

<br/>

Password :

<br/>

<input name="password" type="password" placeholder="**********" required>

<br/>

<br/>

<input name="submit" type="submit" value="Registration">
</div>

<?php

include_once('footer.php');

?>