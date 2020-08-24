<?php
	include 'conn.php';
	$atoz;
	if (isset($_GET['sql'])) {
		echo ($_GET['sql']);
	}
	switch ($_GET['sql']) {
		case atoz:
			foreach ($atoz as $kullanici) {
				$_POST['id'] = $kullanici['id'];
				$kullanici['name'];
				$kullanici['surname'];
				$kullanici['age'];
				$kullanici['sex'];
				$kullanici['username'];
				$kullanici['password'];
			}
			break;
		
		default:
			foreach ($db ->query("SELECT * from users") as $kullanici) {
				$kullanici['id'];
				$kullanici['name'];
				$kullanici['surname'];
				$kullanici['age'];
				$kullanici['sex'];
				$kullanici['username'];
				$kullanici['password'];
			
			}
			break;
	}

	$atoz = $sql->query("SELECT * from users order by name asc");
	$ztoa = $db->query("SELECT * from users order by name desc");
	$frstolst = $db->query("SELECT * from users order by id asc");
	$lstofrst = $db->query("SELECT * from users order by id desc");
	$yngtold = $db->query("SELECT * from users order by age desc");
	$oldtoyng = $db->query("SELECT * from users order by age desc");

	
 ?>