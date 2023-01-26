<?php

	echo "<h1>Celsius to Fahrenheit Converter</h1> \n";

	function cgtofh($centi)
	{
		
		echo "Temperature In Celcius: " . $centi . "\n <br/> \n ";

		$num1 = $centi * 9 / 5;

		$result = $num1 + 32;

		$result = round($result, 1);
		
		return $result;
		
	}

	echo "Temperature In Fahrenheit: " . cgtofh(37) . " \n <br/>";

?>

