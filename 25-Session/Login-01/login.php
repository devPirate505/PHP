<?php

    session_start();

?>

<h1> Login </h1>

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

    <input type='checkbox' name='login_save' value='yes' /> Remember Me
    <br/> <br/>

    <input type="submit" value="Login">

</form>

<?php

	echo "Session = " . @$_SESSION['login_id'];
	
	echo "<br />Cookie = " . @$_COOKIE['login_id'];

?>