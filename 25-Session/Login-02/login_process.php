<?php

session_start();

require('include/functions.php');

if(!isset($_POST['login_email']))
{
    redirect('login.php', 'Error: Invalid Access', 'error');
}

$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];
$login_save = $_POST['login_save'];

if(($login_email == 'admin@masia.pk' && $login_password == '123')
    or
    ($login_email == 'gul@khan.com' && $login_password == '789'))
    {
        $_SESSION['login_id'] = $login_email;    //--create our token variable

        if($login_save == 'yes')
        {
            setcookie('login_id', $login_email, time() + 60);
        }

        redirect("home.php", 'Welcome Back!', 'success');

    }else{

        redirect("login.php", 'Error: Invalid Login Info', 'error');   

    }


?>