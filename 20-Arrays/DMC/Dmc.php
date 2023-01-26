<?php

	$dmc['Maths'] = 75;		
	$dmc['English'] = 79;		
	$dmc['Chemistry'] = 74;		
	$dmc['physics'] = 61;			
	$dmc['Urdu'] = 68;				
	
	echo "<h2> Muhammad Ali's DMC </h2> \n";

	$obtained = 0;

	$srno = 0;

	echo "<table border='1'  width='300' style='text-align: center;'>";
	echo "<tr> 
		<th>
			S.No
		</th>
		<th>
			Subject
		</th>
		<th>
			Marks
		</th>";

	foreach($dmc as $subject => $marks)
	{

		$obtained += $marks;

		$srno ++;

		echo "<tr>
		<td>
			$srno
		</td>
		
		<td>
			$subject
		</td>
		
		<td>
			$marks
		</td>	
		
	  </tr>";;

	}

	$totalSubs =  count($dmc);

	$totalmarks = $totalSubs * 100;
	
	echo "<tr> <th colspan='2'> Obtained Marks</th> <td> $obtained </td> </tr> ";

	echo "<tr> <th colspan='2'> Total Marks </th> <td> $totalmarks </td> </tr> ";

	echo "<tr> <th colspan='2'> Average </th> <td>" . $obtained /	$totalSubs . "</td> </tr>";

	echo "<tr> <th colspan='2'> Percentage </th> <td>" . $obtained / $totalmarks * 100 . "% </td> </tr> </table>";
	

?>

<style>

	table{

		font-family: sans-serif;
		color: #fff;
    	background-color: #343a40;
		border-color: #454d55;
		border-collapse: collapse;

	}
	table tr:hover{

		background-color: rgba(255,255,255,.075);

	}

	table th, table td{

		padding: 10px;

	}

</style>