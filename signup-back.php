<?php
  ## BAĞLANTI YAPIYORUZ
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "exer";
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->query("SET NAMES 'utf8'");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Bağlantı Başarılı...\n"; 
    }
  catch(PDOException $e)
    {
      echo "Bağlantı Hatası: " . $e->getMessage();
    }
    
  ## VERI EKLİYORUZ
  $username_db = $_POST['username'];
 	$password_db = $_POST['password'];
  $email_db = $_POST['email'];
  $name_db = $_POST['name'];
  $surname_db = $_POST['surname'];
  $age_db = $_POST['age'];
  $sex_db = $_POST['sex'];
  $ip = $_SERVER['REMOTE_ADDR'];

  $sql = "INSERT INTO users (Username, Password, Email, Name, Surname, Age, Sex) VALUES ('$username_db', '$password_db', '$email_db','$name_db', '$surname_db', '$age_db', '$sex_db')";
    $conn->exec($sql);
    $loglastid = $conn->lastInsertId();
    echo "Veri Tabanına Eklendi..";

  $sql = "INSERT INTO `logs` (`date`, `kullanici_id`, `username`, `info`, `ip`) VALUES (CURRENT_TIME(), '$loglastid', '$username_db', 'Sign Up', '$ip');";
  $conn->exec($sql);
  header('Location:index.php');    

?>