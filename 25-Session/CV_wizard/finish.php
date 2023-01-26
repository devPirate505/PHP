<?php

session_start();

$name = $_SESSION['name'];
$father_name = $_SESSION['father_name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$skill_1 = $_GET['skill_1'];
$skill_2 = $_GET['skill_2'];
$skill_3 = $_GET['skill_3'];
$job_from_date = $_SESSION['job_from_date'];
$job_to_date = $_SESSION['job_to_date'];


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Wizard</title>
</head>
<body>';

echo "<div><h1> $name </h1>";

echo "<h2> Son of $father_name </h2>";

echo  "<b> E-mail </b> $email <br/> <b> Phone </b> $phone </div>";


echo "<div><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, nobis. Sed, accusantium quidem. Unde, aliquam provident! Impedit dolor dignissimos in velit voluptatum? Laudantium facilis repellat illo vitae odio labore error. </p> </div>";

echo "<h2> Skills </h2> <ul>";

if($skill_1)
{
echo "<li> $skill_1 </li>";
};

if($skill_2)
{
echo "<li> $skill_2  </li>";
};

if($skill_3)
{
echo " <li> $skill_3 </li>";
};

echo "</ul>";

echo "<h2> Work History </h2>";

$job_from_date = str_replace('-', '/', $job_from_date);
$job_to_date = str_replace('-', '/', $job_to_date);

echo "<text>" . $_SESSION['job_from_date'] . " - " . $_SESSION['job_to_date'] . "</text>";

echo "</body></html>";


?>