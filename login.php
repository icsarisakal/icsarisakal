<?php include 'conn.php';
	   ?>

<html>
  <head>
    <title>ForumCan-Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login_css.css">
    <meta charset = "UTF-8">
  </head>
  <body>
      <div id="container" class="form-container">
        <form action="login-back.php" autocomplete="off" method="POST">
          <h1>Giriş</h1>
              <input class="username" type="text" name="username" placeholder="Kullanıcı Adı" autocomplete="off" required="Lütfen bu alanı doldurun"><br />
              <input class="password" type="password" name="password" input="password" placeholder="Şifre" required="Lütfen bu alanı doldurun"><br />
             <input class="sign-in animated bounceIn" type="submit" value="Gir!">
          </form>
        <div id="login-problem" class="log-problem">
          <p>Kullanıcı Adını veya Şifreni Mi Unuttun?</p>
          <p><a href="#">Buraya Tıkla</a></p>
        </div>
  </div> <!-- ENDS FORM CONTAINER -->
  <div class="form-container-signup animated bounceIn">
  <div id="login-problem" class="signup" name="signup">
          <a href="signup.php"><input class="signup-input" type="submit" value="Üye Ol!" name="signup"></a>
        </div>
  </div>
    </div>
  </body>
</html>