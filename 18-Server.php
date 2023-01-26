<h1> SERVER </h1>

<hr/>

<?php

	echo $_SERVER['REMOTE_ADDR'];
	
	echo '<br/>';
	
	echo $_SERVER['PHP_SELF'];
	
	echo '<br/>';
	
	echo"<pre>";
	print_r($_SERVER);
	
		if(!isset($_GET['name']) || strlen($_GET['name']) < 3)
		{
			
			die('Invalid Name');
			
		}
	
?>