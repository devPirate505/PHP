<?php

	$dmc['Maths'] = 75;		
	$dmc['English'] = 79;		
	$dmc['Chemistry'] = 74;		
	$dmc['physics'] = 61;			
	$dmc['Urdu'] = 68;				
	
	echo "<h2> Muhammad Ali's DMC </h2> \n";

	$obtained = 0;

	$srno = 0;

	foreach($dmc as $subject => $marks)
	{

		$obtained += $marks;

		$srno ++;

		echo $srno . ": " . $subject . ' = ' . $marks;
		echo "<br/> \n";

	}

	$totalSubs =  count($dmc);

	$totalmarks = $totalSubs * 100;
	
	echo "<hr/> Obtained : $obtained <hr/>";

	echo "Average = " . $obtained /	$totalSubs . '<hr/>';

	echo "Percentage = " . $obtained / $totalmarks * 100 . '<hr/>';
	

?>

