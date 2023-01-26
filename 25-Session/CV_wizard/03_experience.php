<h1>Welcome to CV Wizard</h1>

<h2>Experience</h2>

<form action="04_skills.php" method="get">

Post: <input type="text" name="post" id="post"> <br/><br/>
Organization: <input type="text" name="organization" id="organization"> <br/><br/>
from: <input type="date" name="job_from_date" id="job_from_date"> <br/><br/>
To: <input type="date" name="job_to_date" id="job_to_date"> <br/><br/>

<input type="submit" value="Next">

</form>

<?php

session_start();

$_SESSION['degree'] = $_GET['degree'];
$_SESSION['uni_name'] = $_GET['uni_name'];
$_SESSION['deg_from_date'] = $_GET['deg_from_date'];
$_SESSION['deg_to_date'] = $_GET['deg_to_date'];
$_SESSION['gpa'] = $_GET['gpa'];



?>