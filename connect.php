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
		
//echo "connection to DB in progress...</br>";
//Подключаемся к базе
		$user = 'b7319c85c459b1';
        $pass = '4b13204c';
        $dbh = new PDO('mysql:host=eu-cdbr-west-02.cleardb.net;dbname=heroku_84caafe9e1164cc', $user, $pass);
        $dbh->exec("set names utf8");

  //      echo "connection succeed";

