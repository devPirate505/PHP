<?php

    $file = "Data/mydata.txt";

    $list = file($file);

    echo "<pre>";
    print_r($list);

?>