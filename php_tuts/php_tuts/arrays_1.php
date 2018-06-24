<?php 

	$myarray = array("Adrian","Sianwa","Hilla","Oseko" );
	$myarray [4] = 19;
	array_push($myarray,10);
	echo "<pre>";
	print_r($myarray);
	for ($i=0; $i <count($myarray); $i++) { 
		echo $myarray[$i];
	}

?>