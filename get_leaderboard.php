<?php
	include_once("connect_to_mysql.php");
	$result = mysql_query("SELECT username, rating FROM user ORDER BY rating DESC LIMIT 10");
	$initial_array = array();
	while($row = mysql_fetch_array($result)) {
		$add_array = array($row['username'], $row['rating']);
		$initial_array = array_merge($add_array, $initial_array);
	}
	echo "start=" . json_encode($initial_array) . "=end";
?>