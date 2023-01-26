<?php

	$email = $_POST['email']; 	
	$password = $_POST['password'];	

	if(!isset($password) || strlen($password) < 3)
		{
			
			die('Login failed');
			
		}

	echo ' Login Successfully ';

	// echo ' Your email is: ';
	// echo $email;
	
	// echo '<br/>'.  $password ;
	
	
?>

