<?php

	$list[93] = 'Afghanistan';		
	$list[61] = 'Australia';
	$list[54] = 'Argentina';
	$list[32] = 'Belgium';
	$list[55] = 'Brazil';
	$list[1] = 'United States';
	$list[56] = 'Chile';
	$list[86] = 'China';
	$list[57] = 'Colombia';
	$list[53] = 'Cuba';
	$list[45] = 'Denmark';
	$list[20] = 'Egypt';
	$list[33] = 'France';
	$list[49] = 'Germany';
	$list[30] = 'Greece';
	$list[36] = 'Hungary';
	$list[91] = 'India';
	$list[62] = 'Indonesia';
	$list[98] = 'Iran';
	$list[39] = 'Italy';
	$list[60] = 'Malaysia';
	$list[52] = 'Mexico';
	$list[95] = 'Myanmar';
	$list[31] = 'Netherlands';
	$list[64] = 'New Zealand';
	$list[47] = 'Norway';
	$list[92] = 'Pakistan';
	$list[51] = 'Peru';
	$list[63] = 'Philippines';
	$list[64] = 'Pitcairn';
	$list[48] = 'Poland';
	$list[40] = 'Romania';
	$list[7] = 'Russia';
	$list[65] = 'Singapore';
	$list[27] = 'South Africa';
	$list[82] = 'South Korea';
	$list[34] = 'Spain';
	$list[94] = 'Sri Lanka';
	$list[46] = 'Sweden';
	$list[41] = 'Switzerland';
	$list[66] = 'Thailand';
	$list[90] = 'Turkey';
	$list[44] = 'United Kingdom';
	$list[58] = 'Venezuela';
	$list[84] = 'Vietnam';
	

 	$code = $_GET['code'];
	
	if(array_key_exists($code , $list))
	{

		echo "<h2>" . $code . " is the code of " . $list[$code] . "</h2>";

	}else{

		echo " <h2 style='background: red;'> Country Not Found </h2>";

	}

?>

