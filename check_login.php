<?php
	include_once("connect_to_mysql.php");
	$username = $_GET['username'];
	$password = $_GET['password'];
	$username = preg_replace('#[^A-Za-z0-9@.]#i', '', $username);
	$password = preg_replace('#[^A-Za-z0-9@.]#i', '', $password);
	$password = md5($password);
	$result = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
	$count = mysql_num_rows($result);
	if($count == 0) {
		echo "false";
	}
	else {
		$row = mysql_fetch_array($result);
		mysql_query("UPDATE user SET active='1' WHERE username='$username'");
		echo "trueid=" . $row['id'] . "end";
	}
?>