<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div style='font: normal normal 33px arial narrow; display: inline-block'>
        MASIA INSTITUTE
    </div>

    <div id="menu">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="Contact.php">Contact</a>
        <a href="logout.php">logout</a>
    </div>

</body>
</html>

<?php

echo "<div align='right'> Welcome " . @$_SESSION['login_id'] . "</div> <hr/>";

	show_msg();


?>

<style>
#menu{
    display: inline-block;
    margin-left: 100px;
}
#menu a{
    margin-left: 10px;
}
</style>
