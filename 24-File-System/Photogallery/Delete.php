<h1>

  Delete File

</h1>

<?php

    $path = './photos/';

    if(!is_dir($path))
    {
        die('Error: Image folder does not exist');
    }

    if(!isset($_GET['file']))
    {
        die('Error: Please select an image');
    }else{
        $file = $_GET['file'];
    }

    // echo "Deleting $file ... <br/>"

    if(is_file($path . $file))
    {
        $del1 = unlink($path . $file);
        $del2 = unlink($path ."/thumb/" . $file);
    }else{
        die('Error: File not Found');
    }

    if($del1)
    {
        echo "Image deleted : $file";
    }else{
        echo "Error: Can not delete $file";
    }

?>