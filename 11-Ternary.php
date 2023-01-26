<?php

	$age = 15;
	
	echo 'You are ';
	echo ($age >= 18) ? 'eligible' : 'not eligible';
	echo ' for driving license';

?>

<div class="<?php echo ($age >= 18) ? 'pass' : 'fail';?>">

	Test Result

</div>

<style>

	.pass{
		
		background: green;
		color: white;
		padding: 5px;
		
	}
	
	.fail{
		
		background: maroon;
		color: white;
		padding: 5px;
		
	}

</style>