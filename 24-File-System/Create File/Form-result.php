<?php

	$name = $_GET['name']; 		
	$type = $_GET['type']; 		
	$text = $_GET['text']; 		
	
	$file = "Data/$name.$type";

    $handler = fopen($file, 'w');

    $write = fwrite($handler, $text);

    if($write)
    {
        echo 'File Saved';
    }else{
        echo "Error";
    }

    fclose($handler);

?>

