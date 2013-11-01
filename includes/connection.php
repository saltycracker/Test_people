<?php
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
	 $db = 'mysql_test';
	 
	 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
	 mysql_select_db($db);
?>