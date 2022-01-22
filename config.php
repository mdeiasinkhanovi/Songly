<?php

$dbhost = "localhost";

$dbuser = "root";

$dbpassword = "";

$dbname = "lyrics";

$connect = mysqli_connect($dbhost ,$dbuser ,$dbpassword);

mysqli_select_db($connect ,$dbname);

?>

