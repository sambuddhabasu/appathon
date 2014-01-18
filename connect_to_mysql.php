<?php
	$host = "sql311.byethost17.com";
	$username = "b17_14246960";
	$password = "pmw123";
	$database = "b17_14246960_pmw";
	$con=mysqli_connect($host, $username, $password, $database);
	//Check for error
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else {
		echo "Done!";
	}
?>