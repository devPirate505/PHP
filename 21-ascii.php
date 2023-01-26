<h1> ASCII codes </h1>

<hr/>

<?php

	echo ord('A');

	echo '<br/>';

	echo chr('97');

	echo '<hr/>';

	for($i = 0; $i <= 255; $i++)
	{

		echo $i . ' = ' . chr($i) . "<br/> \n";	

	}
	
?>