<?php

session_start();

// $email = $_GET['email'];

// $password = $_GET['password'];

// if($email == 'admin@masia.pk' && $password == 123)
// {
//     $_SESSION['login_id'] = $email;

//     header('location: home.php');
// }else {
//     header('location: login.php');
// }

if(!isset($_POST['login_email']))
{
    //--NOT A GOOD PRACTICE
    die("Invalid Access");
}

$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];
$login_save = $_POST['login_save'];

if(($login_email == 'admin@masia.pk' && $login_password == '123')
    or
    ($login_email == 'gul@khan.com' && $login_password == '789'))
    {
        $_SESSION['login_id'] = $login_email;    //--create our token variable

        if($login_save == yes)
        {
            setcookie('login_id', $login_email, time() + 60);
        }

        header("location:home.php");

    }else{

        header('location: login.php?msg=Invalid Login Info');   

    }


?>