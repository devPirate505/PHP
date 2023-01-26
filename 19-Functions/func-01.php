<?php

	function test()
	{
		
		echo "<div style='color: red; font-size:35px'>\n";
		echo " Masia Institute";
		echo "</div>\n";
		
	}
	
	function write($text, $color, $size)
	{
		
		echo "<div style='color: $color; font-size:{$size}px'>\n";
		echo $text;
		echo "</div>\n";
		
	}
	
	function writeText($text, $color = 'gray', $size = '20')
	{
		
		echo "<div style='color: $color; font-size:{$size}px'>\n";
		echo $text;
		echo "</div>\n";
		
	}
	
	write('Intel Corporation', 'blue', 35);
	writeText('Microsoft International');
	writeText('Microsoft International', 'green');
	writeText('Microsoft International', 'yellow', 70);
	test();
	test();
?>

