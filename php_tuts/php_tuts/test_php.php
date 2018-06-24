<?php
	require_once 'dbconnect.php';

	$sql_insert = "INSERT INTO `users` (`id`,`name`, `email`, `username`, `password`) VALUES (NULL, 'oseko', 'adrian.kemei@strathmore.edu', 'Boiyo', '123456789')";
	$last_id = setData($sql_insert);
	//echo $sql_insert;
	echo "It works!!!!!!!!";

	$sql_getdata = "select * from users";
	connect();
	
	$users = getData($sql_getdata);
	echo "<pre>";
	print_r($users);
?>
