<?php 
include 'conn.php';
	session_start();


	date_default_timezone_set('Europe/Istanbul');
	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$ip = $_SERVER['REMOTE_ADDR'];

 	
 		foreach ($db->query("Select * from users") as $kullanici) {
 		if ($kullanici['username'] == $username and $kullanici['password'] == $password) {
 		    $_SESSION["username-ses"] = $username;
 		    $_SESSION["password-ses"] = $password;
 		    $_SESSION["id-ses"] = $kullanici['id'];
 		    $_SESSION["isLogin"] = true;

 		    header('Location:index.php');
 		    
 		}
 		
 		elseif ($kullanici['username'] != $username or $kullanici['password'] != $password){
 			
			header('Location:index.php');
 		}
 	}

 	
 	
	?>
	