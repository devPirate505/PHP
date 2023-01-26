<?php

function drawtable($number)
{
	echo "<div style='display: inline-block; margin: 10px;'> <h2> Table of $number </h2> \n";
	
	echo "<table border='1' width='300' style='text-align: center;'>";
	
	for($i = 1; $i <= 10; $i++)
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
	
	echo "</table> </div>";

}

for($number = 1; $number <= 20; $number++)
{

	drawtable($number);

}
			
?>
