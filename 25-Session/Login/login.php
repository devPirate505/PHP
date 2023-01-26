<h1> Login To Continue </h1>

<?php

    if(isset($_GET['msg']))
    {
        echo "<div id='msg'> $_GET[msg] </div> <br/>";
    }

?>

<form action="login_process.php" method="post">

    Email: <input type="email" name="login_email" id="">
    <br/><br/>

    Password: <input type="password" name="login_password" id="">
    <br/><br/>

    <input type="submit" value="Login">

</form>