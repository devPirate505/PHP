<?php

    $file = "Data/mydata.txt";

    $handler = fopen($file, 'r');

    $text = fread($handler, 1000);

    echo str_replace("\n", "<br /> \n", $text);

    fclose($handler);

?>