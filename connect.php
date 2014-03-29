<?php

	$host="localhost";
	$user="root";
	$pass="";
	$dbname="farewell";
	
	$con=mysqli_connect($host, $user, $pass, $dbname);
	
	if(!$con)
	{
		echo 'Not Connected! Please Contact admin@eclectika.org';
		die();
	}
?>