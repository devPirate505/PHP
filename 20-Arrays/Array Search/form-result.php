<?php

	$list[35] = 'Jamal Khan';	
	$list[61] = 'Waleed Afridi';	
	$list[13] = 'Kamran Waqar';
	$list[22] = 'Afsar Ali';
	$list[40] = 'Naveed Iqbal';
	$list[38] = 'Hassan Azeem';
	$list[41] = 'Sajid Ali';
	$list[51] = 'Osama';
	$list[30] = 'Malik Uzair';
	

 	$name = $_GET['name'];
	
	 if(in_array($name , $list))
	{

		echo "Name Found";

	}else{

		echo "Name not Found";

	}

?>

