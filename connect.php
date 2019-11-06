<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connect</title>
</head>
<body>
-->
<?php
		//Подключаемся к базе
		$user = 'root';
        $pass = '';
        $dbh = new PDO('mysql:host=localhost;dbname=new_english', $user, $pass);
        $dbh->exec("set names utf8");
        

