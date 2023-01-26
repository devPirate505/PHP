<?php

    $file = "Data/mydata.txt";

    $handler = fopen($file, 'w');

    $text = $_GET['text'];

    $write = fwrite($handler, $text);

    if($write)
    {
        echo 'File Saved';
    }else{
        echo "Error";
    }

    fclose($handler);

?>