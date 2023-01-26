<?php

	
	// $list1 = range(1, 100, 6);

	$length = 8;

	$list = range('a', 'z');

	shuffle($list);

	echo "Suggested Password is : ";

	for($i = 0; $i < $length; $i++)
	{
		echo $list[$i];
	}

	// echo "<pre>";
	//  print_r($list1);
	

?>

