<?php 
 include 'conn.php';
  $degisimistek =
  $username_db = $_POST['newuname'];
  $password_db = $_POST['newpass'];
  $email_db = $_POST['email'];
  $name_db = $_POST['newname'];
  $surname_db = $_POST['newsname'];
  $age_db = $_POST['newage'];
  $sex_db = $_POST['newsex'];
  $idselect = $_POST['idselect'];
  $delete = $_POST['delete'];
  

echo $idselect;
if (isset($_POST['newpass'])) {
	$sql = $db->prepare("UPDATE `users` SET `password`= '$password_db' WHERE id=$idselect");
    $sql->execute();
    echo "Veri Tabanına Eklendi..";}
else{
	$_POST['newpass'] = NULL;
}
if (isset($_POST['newuname'])) {
	$sql = $db->prepare("UPDATE `users` SET `username`= '$username_db' WHERE id=$idselect");
    $sql->execute();
    echo "Veri Tabanına Eklendi..";}
else{
	$_POST['newuname'] = NULL;
}
if (isset($_POST['newname'])) {

	$sql = $db->prepare("UPDATE `users` SET `name`= '$name_db' WHERE id=$idselect");
    $sql->execute();
    echo "Veri Tabanına Eklendi..";}
else{
	$_POST['newname'] = NULL;
}
if (isset($_POST['newsname'])) {
	$sql = $db->prepare("UPDATE `users` SET `surname`= '$surname_db' WHERE id=$idselect");
    $sql->execute();
    echo "Veri Tabanına Eklendi..";}
else{
	$_POST['newsname'] = NULL;
}      
if (isset($_POST['newsex'])) {
	$sql = $db->prepare("UPDATE `users` SET `sex`= '$sex_db' WHERE id=$idselect");
    $sql->execute();
    echo "Veri Tabanına Eklendi..";}
else{
	$_POST['newsex'] = NULL;
}
if (isset($_POST['newemail'])) {
	$sql = $db->prepare("UPDATE `users` SET `email`= '$email_db' WHERE id=$idselect");
    $sql->execute();
    echo "Veri Tabanına Eklendi..";}
else{
	$_POST['newemail'] = NULL;
}
if (isset($_POST['newage'])) {
	$sql = $db->prepare("UPDATE `users` SET `age`= '$age_db' WHERE id=$idselect");
    $sql->execute();
    echo "Veri Tabanına Eklendi..";}
else{
	$_POST['newage'] = NULL;
}
if (isset($_POST['delete'])) {
  $sql = $db->prepare("DELETE FROM `users` WHERE `users`.`id` = '$idselect'");
  $sql->execute();
  echo "Veri Tabanına Eklendi..";
}

$idselect=NULL;
header('Location:edit_panel.php');
?>
