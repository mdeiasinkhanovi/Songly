<?php

require_once('function.php');


createTable('lyrics',
  'id int(255) NOT NULL,
  albumart varchar(225) NOT NULL,
  songname varchar(255) NOT NULL,
  category varchar(255) NOT NULL,
  singer varchar(255) NOT NULL,
  album varchar(255) NOT NULL,
  year int(100) NOT NULL,
  song text NOT NULL');
  
  
createTable('user',
  'id int(100) NOT NULL,
  user varchar(255) NOT NULL,
  password varchar(255) NOT NULL');
  
  echo "Table Succesfully Created";
  
?>
