<?php

include_once('header.php');

?>


<?php

session_start();

$user = $_SESSION['user'];

if(isset($user)){

echo <<<_END

<div class="Category">Admin Area</div>

<a href="addlyrics.php"><div class="list1">Add Lyrics</div></a>

<a href="logout.php"><div class="list1">Log Out</div></a>

_END;

}else{
	header('location:login.php?ref=admin.php');
}

?>

<?php

include_once('footer.php');

?>