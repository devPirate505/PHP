<?php

	$number = $_GET['number'];
	$limit = $_GET['limit'];
	
	echo "<h2> Table of $number </h2> \n";
	
	for($i =1; $i <= $limit; $i++)
	{
		
		echo $number;
		echo" x ";
		echo $i;
		echo " = ";
		echo $number * $i;
		echo "<br /> \n";
		
	}
	
?>