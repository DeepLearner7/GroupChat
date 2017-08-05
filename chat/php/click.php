<?php
	session_start(); 
  $mysql_host = 'localhost';
  $usernames   = 'root';
  $password   = '';
  $db_name    = 'chat';
  $con = mysqli_connect( $mysql_host , $usernames  , $password , $db_name ) or die("Couldn't connect to database"); 

	$q = $_POST['Message'];
	$username =	$_SESSION['user'];
 	
				$query = "INSERT INTO data VALUES ('".$username."','".$q."')"; 
				$result = mysqli_query($con,$query);




	
?>