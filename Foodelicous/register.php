<!DOCTYPE html>
<style>
  #foodlogo {
    margin-left: 520px;
  }

  #_form {
    background-color: white;
    border-radius: 5px;
    padding: 10px;
    margin-right: 400px;
    margin-top: 50px;
    margin-left: 400px;
    text-align: center;
  }
  .form-element {
    margin: 10px;
  }
  p {
    margin-top: 30px;
  }
  a:hover {
    color: #d01f4e;
  }
</style>

<html>
  <head>
    <meta charset="UTF-8" />
    <title>Foodelicous.com</title>
    <link type="text/css" rel="stylesheet" href="stylesheet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  </head>

  <body>
    <div id="header1">
      <h2 id="head1_h2">PROVIDING YOU DELICIOUS AND TEMPTING RECIPIES</h2>
    </div>

    <div id="header2">
      <a href="index.html"> <img src="img/logo.png" id="foodlogo" alt="" /></a>
    </div>

    <div id="_form">
    <p>
      <?php
      error_reporting(0);
      ini_set('display_errors', 0);  
        $r = $_GET['res'];
        if($r>=1){
        echo 'Already Registered with that username';} ?>
        </p>

      <form method="post" action="registerAction.php" name="signup-form">
        <div class="form-element">
          <label>Username</label>
          <input type="text" name="username" />
        </div>
        <div class="form-element">
          <label>Email</label>
          <input type="email" name="email" required />
        </div>
        <div class="form-element">
          <label>Password</label>
          <input type="password" name="password" required />
        </div>
        <button type="submit" name="register" value="register">Register</button>
      </form>

      <p>If already have account. <a href="login.php"> Login</a></p>
    </div>
  </body>
</html>
