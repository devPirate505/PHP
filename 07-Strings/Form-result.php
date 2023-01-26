<?php

	$text = $_GET['text']; 		
	
	echo $text;
	
	echo'<hr />';
	
	echo strlen($text);
	
	echo'<hr />';
	
	echo strtoupper($text);
	
	echo'<hr />';
	
	echo strtolower($text);
	
	echo'<hr />';
	
	echo ucfirst($text);
	
	echo'<hr />';
	
	echo ucwords($text);
	
	echo'<hr />';
	
	echo str_repeat($text, 10);
?>

