<?php

session_start();

$_SESSION['name'] = $_GET['name'];
$_SESSION['profession'] = $_GET['profession'];
$_SESSION['father_name'] = $_GET['father_name'];
$_SESSION['gender'] = $_GET['gender'];
$_SESSION['dob'] = $_GET['dob'];
$_SESSION['email'] = $_GET['email'];
$_SESSION['phone'] = $_GET['phone'];



?>

<h1>Welcome to CV Wizard</h1>

<h2>Academics</h2>

<form action="03_experience.php" method="get">

Degree title: <input type="text" name="degree" id="degree"> <br/><br/>
Name of Universty: <input type="text" name="uni_name" id="uni_name"> <br/><br/>
from: <input type="date" name="deg_from_date" id="deg_from_date"> <br/><br/>
To: <input type="date" name="deg_to_date" id="deg_to_date"> <br/><br/>
GPA: <input type="Number" min='0' max='4' name="gpa" id="gpa"> <br/><br/>

<input type="submit" value="Next">

</form>