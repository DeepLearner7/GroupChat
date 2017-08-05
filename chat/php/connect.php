<?php

  $mysql_host = 'localhost';
  $usernames   = 'root';
  $password   = '';
  $db_name    = 'chat';
  $con = mysqli_connect( $mysql_host , $usernames  , $password , $db_name ) or die("Couldn't connect to database"); 
 
  //mysql_select_db($db_name) or die("Couldn't connect");


?>

