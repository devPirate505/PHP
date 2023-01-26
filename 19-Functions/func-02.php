<?php

	function percentage($total, $obtained)
	{
		
		$result = $obtained / $total * 100;

		$result = round($result, 1);
		
		return $result;
		
	}

	echo "Matric: " . percentage(850, 690) . "<br/>";
	echo "Inter: " . percentage(1100, 875) . "<br/>";
	echo "Graduation: " . percentage(600, 495) . "<br/>";
	echo "Masters: " . percentage(600, 470) . "<br/>";
	
	

?>

