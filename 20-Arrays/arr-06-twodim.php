<?php

	$result['Ali']['Maths'] = 75;		
	$result['Ali']['English'] = 79;		
	$result['Ali']['Chemistry'] = 74;		
	$result['Ali']['physics'] = 61;			
	$result['Ali']['Urdu'] = 45;				
	
	$result['Javeria']['English'] = 79;		
	$result['Javeria']['Chemistry'] = 36;		
	$result['Javeria']['physics'] = 61;			
	$result['Javeria']['Urdu'] = 68;				
	
	$result['Kamran']['English'] = 79;
	$result['Kamran']['Maths'] = 48;			
	$result['Kamran']['Chemistry'] = 74;		
	$result['Kamran']['physics'] = 42;			
	$result['Kamran']['Urdu'] = 68;			
	
	// print_r($result);

	foreach($result as $student => $dmc)
	{
		
		echo "<h2> $student </h2> \n";
		$failed = 0;

		foreach($dmc as $subject => $marks)
		{

			
			echo "~ $subject = $marks \n";

			if($marks >= 50)
			{

				echo '=> Pass <br/>';

			}else{

				echo '=> Fail <br/>';

			}
			
			if($marks < 50)
			{
				$failed++;
			}
		}
		echo "<hr /> \n";
		if($failed > 1)
		{

		echo '<b> Overall Result = Not Promoted</b>	';
		
		}else{
			
			echo '<b> Overall Result = Promoted</b>	';
		}

		echo "<hr /> \n	";
	}
	
	
	

?>

