<?php

    session_start();

    if(!isset($_SESSION['login_id']))
    {
        header('location: login.php');
        exit();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <?php include('include/header.php') ?>
    
    <h1> Contact</h1>

    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci minus explicabo ipsum repudiandae eaque quam. Illo delectus omnis assumenda atque! Fugit cumque reiciendis nesciunt porro, laboriosam possimus in voluptatum assumenda?</p>

</body>
</html>