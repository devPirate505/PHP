<?php

    $file = "Data/mydata.txt";

    $handler = fopen($file, 'a');

    $text = "Hello World ";

    $write = fwrite($handler, $text);

    if($write)
    {
        echo 'File Saved';
    }else{
        echo "Error";
    }

    fclose($handler);

?>