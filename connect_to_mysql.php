<?php
$db_host = "mysql13.000webhost.com";
$db_name = "a9328282_user";
$db_username = "a9328282_user";
$db_password = "pmw12345";
mysql_connect("$db_host","$db_username","$db_password") or die ("could not connect to database");
mysql_select_db("$db_name") or die ("no database");
?>