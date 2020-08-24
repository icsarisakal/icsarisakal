<?php include 'conn.php';
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>StackData - DataCenter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<meta charset="utf-8">
  <script src="https://kit.fontawesome.com/3b72f2bc78.js" crossorigin="anonymous"></script>
	<style>
		header {
    	text-align: center;
    	padding: 17px;
    	border: 1px solid;
    	width: 100%;
    	font-weight: bold;}
    	.update-popup-div{
    		box-shadow: 2px 0px 28px 0px rgba(0,72,148,1);
    		padding: 21px;
    		max-width: 317px;
    		display: none;
    		border-radius: 15px;
    		position: absolute;
    		color: black;
    		/*margin: 10px;*/
    		z-index: 2px;
    		background-color: white;
		}
		.update-popup-div:hover{
			display: block;
		}
		.update-popup:hover + .update-popup-div{
			display: block;
		}
		ul{
			list-style: none;
			display: inline-flex;
			margin: 10px 0px;
			width: 100%;
		}
		ul li{
			
			width: 100%;
		}
		ul li input[type=button], ul li button{
			min-width: 160px;
		}
		select{
			background-color: grey;
			opacity: 0.8;
		}
	</style>
</head>
<body>
	<header>StackData</header>
<table class="table table-bordered table-dark" style="max-width: 100%; float: inherit;margin-top: 16px;">
  <thead>
    <tr style="text-align: center">
      <th scope="col"><a href="edit_panel.php?id=ASC"><img src="img/down-vector.png" style="width: 20px;height: 20px;"></a>ID<a href="edit_panel.php?id=DESC"><img src="img/up-vector.png" style="width: 20px;height: 20px;transform: 180deg;"></a></th>
      <th scope="col"><a href="edit_panel.php?name=ASC"><img src="img/down-vector.png" style="width: 20px;height: 20px;"></a>Name<a href="edit_panel.php?name=DESC"><img src="img/up-vector.png" style="width: 20px;height: 20px;"></a></th>
      <th scope="col"><a href="edit_panel.php?surname=ASC"><img src="img/down-vector.png" style="width: 20px;height: 20px;"></a>Surname<a href="edit_panel.php?surname=DESC"><img src="img/up-vector.png" style="width: 20px;height: 20px;"></a></th>
      <th scope="col"><a href="edit_panel.php?age=ASC"><img src="img/down-vector.png" style="width: 20px;height: 20px;"></a>Age<a href="edit_panel.php?age=DESC"><img src="img/up-vector.png" style="width: 20px;height: 20px;"></a></th>
      <th scope="col">Sex</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
   <form action="data_center.php" method='get'>
    <?php
    $sorgu="";
    $id=(!empty($_GET['id'])?$_GET['id']:0);
    if(!empty($id)){
      $sorgu=" ORDER BY id ".$id;
    }
    $name=(!empty($_GET['name'])?$_GET['name']:0);
    if(!empty($name)){
      $sorgu=" ORDER BY name ".$name;
    }
    $surname=(!empty($_GET['surname'])?$_GET['surname']:0);
    if(!empty($surname)){
      $sorgu=" ORDER BY surname ".$surname;
    }
    $age=(!empty($_GET['age'])?$_GET['age']:0);
    if(!empty($age)){
      $sorgu=" ORDER BY age ".$age;
    }
      foreach ($db ->query("SELECT * from users".$sorgu) as $kullanici) {
       ?>
      
   <tr style="text-align: center">
				<th scope="row"><?php echo $kullanici['id']; ?></th>
				<td><?php echo $kullanici['name']; ?></td>
				<td><?php echo $kullanici['surname']; ?></td>
				<td><?php echo $kullanici['age']; ?></td>
				<td><?php echo $kullanici['sex']; ?></td>
				<td><?php echo $kullanici['username']; ?></td>
				<td><?php echo $kullanici['password']; ?></td>
				</tr>
      <?php } ?>
    </form>
  </tbody> 
  </tbody>
</table>

	<ul>
		<li>
			<form action="edit-back.php" method="post">
				<button class="update-popup btn btn-outline-primary" id="idddddddddddddd">Change Name</button>
				<div class="update-popup-div">
					<select name="idselect">
						<?php foreach ($db ->query("SELECT id from users") as $kullanici){ ?>
						<option><?php echo $kullanici['id'] ?></option>
						<?php } ?>
					</select>
					<label>Old Name: <?php echo "deneme"; ?></label>
					<p>New Name:</p>
					<input type="text" name="newname" placeholder="New Name">
					<input type="submit" name="OKAY!">
				</div>
			</form>
		</li>
		<li>
			<form action="edit-back.php" method="post">
				<button class="update-popup btn btn-outline-primary" id="id1">Change Surname</button>
				<div class="update-popup-div">
					<select name="idselect">
						<?php foreach ($db ->query("SELECT id from users") as $kullanici){ ?>
						<option><?php echo $kullanici['id'] ?></option>
						<?php } ?>
					</select>
					<label>Old Surname: <?php echo "deneme"; ?></label>
					<p>New Surname:</p>
					<input type="text" name="newsname" placeholder="New Surname">
					<input type="submit" name="OKAY!">
				</div>
			</form>
		</li>
		<li>
			<form action="edit-back.php" method="post">
				<button class="update-popup btn btn-outline-primary">Change Age</button>
				<div class="update-popup-div">
					<select name="idselect">
						<?php foreach ($db ->query("SELECT id from users") as $kullanici){ ?>
						<option><?php echo $kullanici['id'] ?></option>
						<?php } ?>
					</select>
					<label>Old Age: <?php echo "deneme"; ?></label>
					<p>New Age:</p>
					<input type="text" name="newage" placeholder="New Age">
					<input type="submit" name="OKAY!">
				</div>
			</form>
		</li>
		<li>
			<form action="edit-back.php" method="post">
				<button class="update-popup btn btn-outline-primary">Change Sex</button>
				<div class="update-popup-div">
					<select name="idselect">
						<?php foreach ($db ->query("SELECT id from users") as $kullanici){ ?>
						<option><?php echo $kullanici['id'] ?></option>
						<?php } ?>
					</select>
					<label>Old Sex: <?php echo "deneme"; ?></label>
					<p>New Sex:</p>
					<input type="text" name="newsex" placeholder="New Sex">
					<input type="submit" name="OKAY!">
				</div>
			</form>
		</li>
		<li>
			<form action="edit-back.php" method="post">
				<button class="update-popup btn btn-outline-primary">Change UserName</button>
				<div class="update-popup-div">
					<select name="idselect">
						<?php foreach ($db ->query("SELECT id from users") as $kullanici){ ?>
						<option><?php echo $kullanici['id'] ?></option>
						<?php } ?>
					</select>
					<label>Old UserName: <?php echo "deneme"; ?></label>
					<p>New UserName:</p>
					<input type="text" name="newuname" placeholder="New UserName">
					<input type="submit" name="OKAY!">
				</div>
			</form>
		</li>
		<li>
			<form action="edit-back.php" method="post">
				<button class="update-popup btn btn-outline-primary">Change Password</button>
				<div class="update-popup-div">
					
					<select name="idselect">
						<?php foreach ($db ->query("SELECT id from users") as $kullanici){ ?>
						<option><?php echo $kullanici['id'] ?></option>
						<?php } ?>
					</select>
					
					<label>Old Password: <?php echo "deneme"; ?></label>
					<p>New Password:</p>
					<input type="text" name="newpass" placeholder="New Password">
					<input type="submit" value="OKAY!">
				</div>
			</form>
		</li>
		<li>
			<form action="edit-back.php" method="post">
				<button class="update-popup btn btn-outline-primary" id="id1">Delete User</button>
				<div class="update-popup-div">
					<select name="idselect">
						<?php foreach ($db ->query("SELECT id from users") as $kullanici){ ?>
						<option><?php echo $kullanici['id'] ?></option>
						<?php } ?>
					</select>
					<input type="submit" name="delete" value="Delete">
				</div>
			</form>
		</li>
	</ul>
<a href="admin_panel.php"><button type="button" class="btn btn-primary btn-lg" style="margin: 5px 547px;">Back to Admin Panel</button></a>
</body>
</html>