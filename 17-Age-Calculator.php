<h1> Age Calculator </h1>

<hr/>

<?php

	$input = "10-9-2002";

	$input = strtotime($input);
	
	$age = time() - $input;
	
	$age = $age / 60 / 60 / 24 / 365.25;
	
	$age = round($age, 0);
	
	echo $age . " years";
	
?>