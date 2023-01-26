<?php

	$number = $_GET['number'];
	$limit = $_GET['limit'];
	
	echo "<h2> Table of $number </h2> \n";
	
	echo "<table border='1' width='300' style='text-align: center;'>";
	
	for($i = 1; $i <= $limit; $i++)
	{
		
		$result = $number * $i;
		
		echo "<tr>
				<td>
					$number
				</td>
				
				<td>
					x
				</td>
				
				<td>
					$i
				</td>
				
				<td>
					=
				</td>
				
				<td>
					$result
				</td>
			  </tr>";
	
	}
	
	echo "</table>";
	
?>
