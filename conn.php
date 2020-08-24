<?php
$servername = "mysql:host=localhost;dbname=exer";
$username = "root";
$password = "";
$dbname = "exer";


try {
	$db = new PDO($servername, $username, $password);
	$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
}
catch (PDOException $e){
	echo "Connection Failed: ". $e -> getMessage();
}
?>