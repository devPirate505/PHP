<h1>Welcome to CV Wizard</h1>

<h2>Add Some Skills</h2>

<form action="finish.php" method="get">

Skill: <input type="text" name="skill_1" id="post"> <br/><br/>
Skill: <input type="text" name="skill_2" id="post"> <br/><br/>
Skill: <input type="text" name="skill_3" id="post"> <br/><br/>


<input type="submit" value="Next">

</form>

<?php

session_start();

$_SESSION['post'] = $_GET['post'];
$_SESSION['organization'] = $_GET['organization'];
$_SESSION['job_from_date'] = $_GET['job_from_date'];
$_SESSION['job_to_date'] = $_GET['job_to_date'];

?>