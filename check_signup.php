<?php
	include_once("connect_to_mysql.php");
	$first_name = $_GET['first_name'];
	$last_name = $_GET['last_name'];
	$gender = $_GET['gender'];
	$diet = $_GET['diet'];
	$email = $_GET['email'];
	$username = $_GET['username'];
	$password = $_GET['password'];
	$first_name = preg_replace('#[^A-Za-z0-9@.]#i', '', $first_name);
	$last_name = preg_replace('#[^A-Za-z0-9@.]#i', '', $last_name);
	$email = preg_replace('#[^A-Za-z0-9@.]#i', '', $email);
	$username = preg_replace('#[^A-Za-z0-9@.]#i', '', $username);
	$password = preg_replace('#[^A-Za-z0-9@.]#i', '', $password);
	$password = md5($password);
	$result = mysql_query("SELECT * FROM user WHERE username='$username' LIMIT 1");
	$count = mysql_num_rows($result);
	if($count != 0) {
		echo "Existing username";
	}
	else {
		mysql_query("INSERT INTO user VALUES ('', '$first_name', '$last_name', '$gender', '$diet', '$email', '$username', '$password', '0')");
		echo "true";
	}
?>