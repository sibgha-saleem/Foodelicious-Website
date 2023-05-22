

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
      <a href="index.php"> <img src="img/logo.png" id="foodlogo" alt="" /></a>
    </div>

    <div id="_form">
    <p>
      <?php 
      error_reporting(0);
      ini_set('display_errors', 0); 
        $r = $_GET['res'];
        if($r>=1){
        echo 'Account Registered, now Login'; 
          $res2 = 0;} ?></p>
        <?php
   $connection = mysqli_connect("localhost","root","","foodelicous");
   if (!$connection) 
   { die("Connection failed: " . mysqli_connect_error()); }
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connection,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['password']); 
      
       $sql = "SELECT `id` FROM `food` WHERE `username` = '$myusername' and `password` = '$mypassword'";
       $result = mysqli_query($connection, $sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
          header("location: index.php");
      }else {
         echo "<p>Your Login Name or Password is invalid</p>";
      }
   }
?>

      <form action ="" method ="post">
        <div class="form-element">
          <label>Username</label>
          <input type="text" name="username"/>
        </div>
        <div class="form-element">
          <label>Password</label>
          <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">Log In</button>
      </form>

      <p>If you do not have account. <a href="register.php"> Register</a></p>

      

    </div>
  </body>
</html>
