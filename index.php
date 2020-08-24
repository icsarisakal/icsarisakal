<?php include 'conn.php'; 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>StackData-EXER</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
</head>
<body>
	<header>StackData</header>
	<div class="user-request">
		<?php 
			if (isset($_SESSION["isLogin"])) {
				echo $_SESSION["username-ses"]." "."Login Success!";
							}

		?>
		<ul>
			<?php 
			if (!isset($_SESSION["isLogin"])) {
				echo "<li><a href='login.php'><button>Login</button></a></li>";
			}
			else{
				echo "<li><a href='data_center.php'><button>Show Datas</button></a></li>";
				echo "<li><a href='admin_panel.php'><button>Edit the Datas</button></a></li>";
				echo "<li><form action='logout.php' method='post'><input type='submit' value='Quit!'></form></li>";
			}
			?>
			
			
		</ul>
	</div>



</body>
</html>