<?php

    session_start();

    require('include/function.php');

    authenticate();

    unset($_SESSION[login_id]);

    header("location: login.php?msg=Successfully Logged out");


?>