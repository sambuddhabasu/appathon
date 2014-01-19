<?php
	include_once("connect_to_mysql.php");
	$recipe_name = $_GET['recipe_name'];
	$result = mysql_query("SELECT * FROM recipe WHERE title='$recipe_name' LIMIT 1");
	$row = mysql_fetch_array($result);
	$initial_array = array($row['title'], $row['ingredients'], $row['procedure'], $row['rating']);
	echo "start=" . json_encode($initial_array) . "=end";
?>