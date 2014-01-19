<?php
	include_once("connect_to_mysql.php");
	$query = $_GET['query'];
	$query = explode(" ", $query);
	$max = count($query);
	$content = "SELECT * FROM recipe WHERE ingredients LIKE '%$query[0]%'";
	for($i=1;$i<$max;$i++) {
		$content = $content . " AND ingredients LIKE '%$query[$i]%'";
	}
	$content = $content . " ORDER BY rating DESC";
	$result = mysql_query($content);
	$count = mysql_num_rows($result);
	$initial_array = array();
	if($count != 0) {
		while($row = mysql_fetch_array($result)) {
			$add_array = array($row['rep_id'], $row['title'], $row['ingredients']);
			$initial_array = array_merge($add_array, $initial_array);
		}
		echo "start=" . json_encode($initial_array) . "=end";
	}
	else {
		echo "false";
	}
?>