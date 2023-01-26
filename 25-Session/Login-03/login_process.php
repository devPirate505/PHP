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

    //-------------DATABASE CODE-------------

    // $connection = mysqli_connect('server', 'username', 'password', 'database name')
    $connection = mysqli_connect('localhost', 'root', '', 'web596');

    $query = mysqli_query($connection, "SELECT * FROM users
                                        WHERE email='$login_email'
                                        AND 
                                        password='$login_password'");
     
    $total = mysqli_affected_rows($connection); 


    //-------------END DATABASE--------------
if($total == 1)
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