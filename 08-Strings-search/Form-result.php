<?php

	$text = $_GET['text']; 		
	
	// echo strstr($text, '@');
	
	// echo strchr($text, '@');
	
	// echo strrchr($text, '.');
	
	// echo strpos($text, '@');
	
	if(strpos($text, '@') < 3)
	{
		
		echo 'Error: Invalid Email';
		
	}else{
		
		echo 'Success: Valid Email';
		
	}
	


