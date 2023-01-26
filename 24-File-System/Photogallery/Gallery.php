<div class='heading'><h1>

    My Photo Gallery

</h1> </div>

<div id='container'>

<form method='post' action='upload.php' enctype='multipart/form-data'>

    <input type='file' name='myimg' /> 
    <input type='submit' value='Upload' />

</form> <br/><hr/>

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

        if(is_file("$path/thumb/$file"))
        {
            echo "<div class='imgbox'><div class='image'><a href='$path/$file'> ";
            echo "<img src='$path/thumb/$file' width='400px' /> ";
            echo "</a> </div>   <h3> $file </h3> <a href='delete.php?file=$file' class='delete'> Delete </a> </div> ";
        
        }else{

            echo "<div class='imgbox'><div class='image'><a href='$path/$file'> ";
            echo "<img src='$path/$file' width='400px' /> ";
            echo "</a> </div>   <h3> $file </h3> <a href='delete.php?file=$file' class='delete'> Delete </a> </div> ";

        }

    }

    echo "</div>";

?>

<style>
    
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .heading{

        text-align: center;
        margin: 5px;

    }
    #container{

        width: 94.2%;
        margin: 10px auto;

    }
    .imgbox{

        display: inline-block;
        margin: 10px;
        text-align: center;

    }
    .image{

        box-shadow: 7px 12px 13px 3px grey;
        margin-bottom: 5px;
    }

    .delete{
        color: black;
        text-decoration: none;
        border: 1px solid black;
        padding: 3px;
        border-radius: 8px;
        box-shadow: 2px 2px 5px 1px grey;
    }    
    
    .delete:hover{
        color: black;
        background: red;
        border: 1px solid brown;
        padding: 3px;
        border-radius: 8px;
    }    

    h3{
        
        margin: 10px;

    }


</style>