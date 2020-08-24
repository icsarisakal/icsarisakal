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
    	font-weight: bold;
}
	</style>
</head>
<body>
	<header>StackData</header>
<table class="table table-bordered table-dark" style="max-width: 70%; float: inherit;margin-left: 180px;margin-top: 16px;">
  <thead>
    <tr style="text-align: center">
      <th scope="col"><a href="data_center.php?id=ASC"><img src="img/down-vector.png" style="width: 20px;height: 20px;"></a>ID<a href="data_center.php?id=DESC"><img src="img/up-vector.png" style="width: 20px;height: 20px;transform: 180deg;"></a></th>
      <th scope="col"><a href="data_center.php?name=ASC"><img src="img/down-vector.png" style="width: 20px;height: 20px;"></a>Name<a href="data_center.php?name=DESC"><img src="img/up-vector.png" style="width: 20px;height: 20px;"></a></th>
      <th scope="col"><a href="data_center.php?surname=ASC"><img src="img/down-vector.png" style="width: 20px;height: 20px;"></a>Surname<a href="data_center.php?surname=DESC"><img src="img/up-vector.png" style="width: 20px;height: 20px;"></a></th>
      <th scope="col"><a href="data_center.php?age=ASC"><img src="img/down-vector.png" style="width: 20px;height: 20px;"></a>Age<a href="data_center.php?age=DESC"><img src="img/up-vector.png" style="width: 20px;height: 20px;"></a></th>
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
</body>
</html>