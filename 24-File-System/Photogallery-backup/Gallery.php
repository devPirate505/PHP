<div class='heading'><h1>

    Photo Gallery

</h1> </div>

<?php

    $path = './photos/';

    if(!is_dir($path))
    {
        die('Error: Image folder does not exist');
    }

    $handler = opendir($path);

    while($file = readdir($handler))
    {

        // if($file != '.' && $file != '..')
        // {
        //     echo $file . "<br/>";
        // }

        if($file == '.' || $file == '..' || is_dir($path . $file))
        {
           continue;
        }

        echo "<div class='image'><a href='$path/$file'> ";
        echo "<img src='$path/thumb/$file' width='400px' /> ";
        echo "</a> </div>";

    }

?>

<style>

    .heading{

        text-align: center;
        font-family: sans-serif;

    }
    .image{

        display: inline-block;
        margin: 20px;
        box-shadow: 7px 12px 13px 3px grey;

    }

</style>