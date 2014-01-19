<?php
	include_once("connect_to_mysql.php");
	$voting = $_GET['rating'];
	$recipe_name = $_GET['recipe_name'];
	if($voting == "up") {
		mysql_query("UPDATE recipe SET rating=rating+1 WHERE title='$recipe_name'");
		$check_id = mysql_query("SELECT * FROM recipe WHERE title='$recipe_name'");
		$row = mysql_fetch_array($check_id);
		$user_id = $row['user'];
		mysql_query("UPDATE user SET rating=rating+1 WHERE id='$user_id'");
	}
	else if($voting == "down") {
		mysql_query("UPDATE recipe SET rating=rating-1 WHERE title='$recipe_name'");
		$check_id = mysql_query("SELECT * FROM recipe WHERE title='$recipe_name'");
		$row = mysql_fetch_array($check_id);
		$user_id = $row['user'];
		mysql_query("UPDATE user SET rating=rating-1 WHERE id='$user_id'");
	}
	echo "true";
?>