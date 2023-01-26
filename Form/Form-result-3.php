<?php

	$email = $_POST['email']; 	
	$password = $_POST['password'];	
	
	if($email == 'admin@masia.pk' and $password == '123')
	{
		
		echo " <h1> MASIA Institute <small> Administration Area </small> </h1>
			
			<div id='menu'>
			
				<a href='#'> Users </a> |
				<a href='#'> Pages </a> |
				<a href='#'> Coures </a> |
				<a href='#'> News </a> |
				<a href='#'> Logout </a> |
				
			</div>";
			
	}else if($email == 'reception@masia.pk' and $password == '123456')
	{
		
		echo " <h1> MASIA Institute <small> Receptionist Area </small> </h1>
			
			<div id='menu'>
			
				<a href='#'> Coures </a> |
				<a href='#'> News </a> |
				<a href='#'> Logout </a> |
				
			</div>";
			
	}else{
		
		echo "Invalid Login";
		
		}
		
?>

