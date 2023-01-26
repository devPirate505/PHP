<?php

    // print_r($_FILES);

    $path = 'photos/';

    $file_name = $_FILES['myimg']['name'];
    $file_type = $_FILES['myimg']['type'];
    $file_error = $_FILES['myimg']['error'];
    $file_size = $_FILES['myimg']['size'];
    $file_tmp_name = $_FILES['myimg']['tmp_name'];

    $file_extension = strrchr($file_name, '.');

    $image_info = getimagesize($file_tmp_name);

    if($image_info[0] < 100)
    {
        echo "Error: Image width is too Short";
    }

    $allowed = array('.jpg', '.png', '.jpeg');

    if(!in_array($file_extension, $allowed))
    {
        die('Error: Invalid file type, we only accept images');
    }

    if($file_size < 1000)
    {
        die('Error: File size is too small');
    }

    if($file_size > 200000)
    {
        die('Error: File size exceeds 200kb');
    }
    
    // $upload = copy($file_tmp_name , $path . $file_name);

    $upload = move_uploaded_file($file_tmp_name , $path . $file_name);

    if($upload)
    {
        echo 'Uploaded';
    }else{
        echo 'Error';
    }

?>