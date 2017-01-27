<?php
	$host = 'localhost';
	$user = 'root';
	$db = 'test1';
	$pass = '';
$connect = @mysql_connect($host, $user, $pass) or die('Database could not connect');
$select = @mysql_select_db($db, $connect) or die('Database could not select');
?>