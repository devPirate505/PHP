<?php

    session_start();

    require('include/functions.php');

    authenticate();

    unset($_SESSION['login_id']);

    setcookie('login_id', NULL, time() - 12);

    redirect('login.php', 'Successfully Logged out', 'success');


?>