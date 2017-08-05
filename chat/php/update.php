<?php
	
	//require "connect.php";
	
  $mysql_host = 'localhost';
  $usernames   = 'root';
  $password   = '';
  $db_name    = 'chat';
  $con = mysqli_connect( $mysql_host , $usernames  , $password , $db_name ) or die("Couldn't connect to database"); 
 
	
 	
				$query = "SELECT * FROM data WHERE 1"; 
				$result = mysqli_query($con,$query);
				

				while( $row = mysqli_fetch_assoc($result) )
				{
					echo "<br><span style='margin-left:3%; margin-right:2%; font-size:20px;'><b>".$row['username']." </b></span> : <span style='margin-left:2%;'><i> ".$row['Messages']."</i></span><hr>";
				}


	
?>