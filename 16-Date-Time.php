<?php

	echo 'Unix Timestamp:';
	
	echo time();
	
?>

<hr/>

<?php

	// echo date("d-m-Y", time());
	
	// echo date("l, d-M-Y");
	
	// echo date("l, d-m-Y h:i:s a");
	
	echo date("l, d-m-Y h:i:s a", time() + 3600*24*90);
	
	echo '<hr/>';
	
	$input = "7-7-1992";
	
	$input = strtotime($input);
	
	echo date('l, d-M-Y', $input);
	
?>