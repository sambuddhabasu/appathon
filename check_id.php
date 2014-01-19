<?php
	include_once("connect_to_mysql.php");
	$id = $_GET['id'];
	$result = mysql_query("SELECT * FROM user WHERE id='$id' LIMIT 1");
	$row = mysql_fetch_array($result);
	echo "username=" . $row['username'] . "&rating=" . $row['rating'] . "end";
?>