<?php

$dbhost = 'localhost';

$dbname = 'lyrics';

$dbuser = 'root';

$dbpass = '';

$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($connect->connect_error) die($connect->connect_error);

function createTable($name, $query)

{
	
queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");

echo "Table '$name' created or already exists.<br>";

}


function queryMysql($query)

{
	
global $connect;

$result = $connect->query($query);

if (!$result) die($connect->error);

return $result;

}

?>