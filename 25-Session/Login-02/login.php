<?php

    session_start();
    require('include/functions.php');

?>

<link rel="stylesheet" href="style/theme1.css">

<h1> Login </h1>

<?php

    show_msg();

?>

<form action="login_process.php" method="post">

    Email: <input type="email" name="login_email" id="">
    <br/><br/>

    Password: <input type="password" name="login_password" id="">
    <br/><br/>

    <input type='checkbox' name='login_save' value='yes' /> Remember Me
    <br/> <br/>

    <input type="submit" value="Login">

</form>

<?php

	echo "Session = " . @$_SESSION['login_id'];
	
	echo "<br />Cookie = " . @$_COOKIE['login_id'];

?>