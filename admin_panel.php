<?php 
	include 'conn.php';
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
		
		if ($_SESSION["username-ses"] == 'admin' ) {
				echo "Admin Login Success!";
				echo "<li><a href='edit_panel.php'><button>Edit User</button></a></li>";
				echo "<li><a href='admin-add-user.php'><button>Add User</button></a></li>";
				echo "<li><a href='login.php'><button>See Logs</button></a></li>";
				echo "<li><a href='index.php'><button>Go Home Page</button></a></li>";
							}
		else{
				header('Location:index.php');
		}					
		?>
		<ul>
			<?php 
			if (empty($_SESSION["username-ses"])) {
				echo "<li><a href='login.php'><button>Login</button></a></li>";
			}
			
			?>
			
			
		</ul>
	</div>
</body>
</html>