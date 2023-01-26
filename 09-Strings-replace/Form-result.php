<?php

	$text = $_GET['text']; 		
	
	$text = str_replace('hate', 'h**e', $text);
	
	// $text = str_replace('hate', 'love', $text);
	
	echo $text;

?>