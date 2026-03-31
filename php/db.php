<?php

	$hostname = 'localhost';
	$database = 'u149451880_almadeena';
	$username = 'u149451880_alma_user';
	$password = 'Alm@d33n#@(123)';
	$connection = mysqli_connect($hostname, $username, $password);
	mysqli_select_db($connection,$database);
?>