<?php

	$age = $_GET['age'];
	echo ' Your age is:';
	echo $age;
	
	echo'<br />';
	
	if($age >= 18)
	{
		
		echo 'Congrats! you are eligible for driving license.';
		
	}else{
		
		echo ' Error: You are too young to drive!';
		
	}
		
?>

