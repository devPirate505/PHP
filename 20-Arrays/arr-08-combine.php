<?php

	
	$list1 = array('Ali Khan', 'Naveed Iqbal', 'Jamal Shah');
	$list2 = array('345', '653', '782');

	$list = array_combine($list2, $list1);

	echo "<pre>";
	print_r($list);
	
	

?>

