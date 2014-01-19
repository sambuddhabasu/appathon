<?php
	include_once("connect_to_mysql.php");
	$id = $_GET['id'];
	$recipe_name = $_GET['recipe_name'];
	$tags = $_GET['tags'];
	$instructions = $_GET['instructions'];
	$result = mysql_query("SELECT * FROM recipe WHERE title='$recipe_name' LIMIT 1");
	$count = mysql_num_rows($result);
	if($count != 0) {
		echo "false";
	}
	else {
		mysql_query("INSERT INTO recipe VALUES ('', '$recipe_name', '$id', '$instructions', '$tags', '0')");
	/*	$recipe_get_id = mysql_query("SELECT * FROM recipe WHERE title='$recipe_name'");
		$row = mysql_fetch_array($recipe_get_id);
		$recipe_id = $row['rep_id'];
		$tags = explode(' ', $tags);
		$max = count($tags);
		$list_tag_id = array();
		for($i=0;$i<$max;$i++) {
			$name_of_tag = $tags[$i];
			$check = mysql_query("SELECT * FROM tag WHERE name='$name_of_tag'");
			$count_num_id = mysql_num_rows($check);
			if($count_num_id != 0) {
				$row = mysql_fetch_array($check);
				$list_tag_id = array_merge(array($row['tag_id']), $list_tag_id);
			}
			else {
				mysql_query("INSERT INTO tag VALUES ('', '$name_of_tag')");
				$check = mysql_query("SELECT * FROM tag WHERE name='$name_of_tag'");
				$row = mysql_fetch_array($check);
				$list_tag_id = array_merge(array($row['tag_id']), $list_tag_id);
			}
		}
		$max_count = count($list_tag_id);
		for($i=0;$i<$max_count;$i++) {
			$this_is_id = $list_tag_id[$i];
			mysql_query("INSERT INTO rxtag VALUES ('$this_is_id', '$recipe_id')");
		}	*/
		echo "true";
	}
?>