<?php include 'conn.php'; ?>

<html>
  <head>
    <title>DataBase-Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <meta charset = "UTF-8">
  </head>
  <body>
      <div id="container" class="form-container">
        <form action="signup-back.php" autocomplete="off" method="POST">
          <h1>Sign Up!</h1>
          <div style="float: left;">
              <p>Nickname</p>
              <input class="username" type="text" name="username" placeholder="Nickname"  required="Lütfen Bu Alanı Doldurun"><br />
              <p>Password</p>
              <input class="password" type="password" name="password" input="password" placeholder="Password" required="Lütfen Bu Alanı Doldurun"><br />
              <p>Password Verification</p>
              <input class="password" type="password" name="password-control" input="password" placeholder="Password" required="Lütfen Bu Alanı Doldurun"><br />
              <p>E-Mail</p>
              <input class="e-mail" type="email" name="email" placeholder="E-Mail"><br />
            </div>
            <div style="float:right;">
              <p>Name</p>
              <input class="name" type="text" name="name" placeholder="Name"  required="Lütfen Bu Alanı Doldurun"><br />
              <p>Surname</p>
              <input class="surname" type="text" name="surname" input="Surname" placeholder="Surname" required="Lütfen Bu Alanı Doldurun"><br />
              <p>Age</p>
              <input class="age" type="number" name="age" input="Age" placeholder="Age" required="Lütfen Bu Alanı Doldurun"><br />
              <p>Sex</p>
              <select name="sex" class="select">
                  <option value="Other">Other</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  
              </select>
            </div>
             <input class="sign-in animated bounceIn" type="submit" value="Join Us!">
          </form>
        <div id="login-problem" class="log-problem">
          <p>Have you got already account?</p>
          <p><a href="index.php">Buraya Tıkla</a></p>
        </div>
  </div> <!-- ENDS FORM CONTAINER -->