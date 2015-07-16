<?php
$mysql_hostname = "eparipalanadb.cqcjs9c9bd9b.ap-southeast-1.rds.amazonaws.com";
$mysql_user = "seshadri";
$mysql_password = "murugaa8";
$mysql_database = "eparipalanadb";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
