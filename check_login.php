<?php
	include_once("connect_to_mysql.php");
	$result = mysql_query("SELECT * FROM user");
	while($row = mysql_fetch_array($result)) {
		echo $row['first_name'] . " " . $row['last_name'];
	}
?>