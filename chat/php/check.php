<?php
	session_start();
  $mysql_host = 'localhost';
  $usernames   = 'root';
  $password   = '';
  $db_name    = 'chat';
  $con = mysqli_connect( $mysql_host , $usernames  , $password , $db_name ) or die("Couldn't connect to database"); 
	$id   =  mysqli_real_escape_string($con,$_POST['id']);
	$pass =  mysqli_real_escape_string($con,$_POST['pass']);

	
	$query = "SELECT * FROM login WHERE (username='".$id."' AND password='".$pass."')"; 
	$result = mysqli_query($con,$query);
	
	

		if($row = mysqli_fetch_assoc($result))
		{
			

			$_SESSION['user']=$id;
		
    		echo "window.open('chatBox.html','_self')";
			

			//WHAT TO WRITE HERE IF I WANT TO OPEN THE NEXT PAGE??????????

		}else
		{
			echo "Username/Password not correct";
		}


	?>