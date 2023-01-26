<?php

/*
    Redirect user to login page if a person
    has not signed in or his session is expired
*/

function authenticate()
{
    //--CHECK IF USER IS LOGGED IN

    if(!isset($_SESSION['login_id']) && !isset($_COOKIE['login_id']))
    {
        header('location: login.php?msg=Please Login First');
        exit();
    }
}

?>