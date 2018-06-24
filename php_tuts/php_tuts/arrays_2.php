<?php

	$myarray = array('Adrian' =>99 ,"Sianwa"=>99,"Hillary"=>99,"Oseko"=>99 );

	echo "<pre>";
	print_r($myarray);

	foreach ($myarray as $key => $value) {
		echo $value;
	}
?>