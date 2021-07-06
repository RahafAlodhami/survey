<?php

$server = "localhost";
$username="root";
$password="";
$dbname="survey";
	// connect to the database
	$conn = mysqli_connect($server, $username, $password, $dbname);
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

?>
