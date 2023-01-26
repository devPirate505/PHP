<?php

	//key, offset, index

	$list[35] = 'Jamal Khan';	
	$list[61] = 'Waleed Afridi';	
	$list[13] = 'Kamran Waqar';
	$list[22] = 'Afsar Ali';
	$list[40] = 'Naveed Iqbal';
	
	echo'<pre>';

	// echo count($list);
	
	print_r($list);

	echo '<hr />';

	// sort($list);

	// rsort($list);

	// asort($list);
	
	// arsort($list);

	// ksort($list);

	krsort($list);

	// echo in_array('Jamal Khan', $list);
	
	echo array_key_exists('22', $list);

	echo "<br/>";

	print_r($list);


?>

