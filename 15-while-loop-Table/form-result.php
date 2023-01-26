<?php

	$number = $_GET['number'];
	$limit = $_GET['limit'];
	$color = $_GET['color'];
	$border = $_GET['border'];
	$position = $_GET['position'];
	$count = 1	;
	
	echo "<h2> Table of $number </h2> \n";
	
	if(!isset($_GET['number']))
		{
			
			die('Invalid Number');
			
		}
	
	switch($position)
	{
		
		case 'left':
		echo "<div style='margin: 0';> <table border='1' width='300' style='text-align: center;'>";
		
			while($count <= $limit)
	{
		
		$result = $number * $count;
		
		echo "<tr>
				<td>
					$number
				</td>
				
				<td>
					x
				</td>
				
				<td>
					$count
				</td>
				
				<td>
					=
				</td>
				
				<td>
					$result
				</td>
			  </tr>";
			  
		$count++;
	
	}

	
	echo "</table> </div>";
	
	echo "<style>";
	
	echo "
	
	table{
		
		background-color: $border;
		
	}
	
	table tr td{
		
		background-color: $color;
		
	}";
	
	echo "</style>";
		break;
		
		case 'center':
		echo "<div style='margin: auto';> <table border='1' width='300' style='text-align: center;'>";
		
			while($count <= $limit)
	{
		
		$result = $number * $count;
		
		echo "<tr>
				<td>
					$number
				</td>
				
				<td>
					x
				</td>
				
				<td>
					$count
				</td>
				
				<td>
					=
				</td>
				
				<td>
					$result
				</td>
			  </tr>";
			  
		$count++;
	
	}

	
	echo "</table> </div>";
	
	echo "<style>";
	
	echo "
	
	table{
		
		background-color: $border;
		
	}
	
	table tr td{
		
		background-color: $color;
		
	}";
	
	echo "</style>";
		break;
		
		case 'right':
		echo "<div style='margin: 0 77.8% ';> <table border='1' width='300' style='text-align: center;'>";
		
			while($count <= $limit)
	{
		
		$result = $number * $count;
		
		echo "<tr>
				<td>
					$number
				</td>
				
				<td>
					x
				</td>
				
				<td>
					$count
				</td>
				
				<td>
					=
				</td>
				
				<td>
					$result
				</td>
			  </tr>";
			  
		$count++;
	
	}

	
	echo "</table> </div>";
	
	echo "<style>";
	
	echo "
	
	table{
		
		background-color: $border;
		
	}
	
	table tr td{
		
		background-color: $color;
		
	}";
	
	echo "</style>";
		break;
		
		default:
			echo "Please write valid position for table";
			
	}
		
	
	
?>


<style>


div{
	
	width: 22.2%;
	
}

</style>