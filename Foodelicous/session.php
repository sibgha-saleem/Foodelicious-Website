<?php
      error_reporting(0);
      ini_set('display_errors', 0); 
   $connection = mysqli_connect("localhost","root","","foodelicous");
   if (!$connection) 
   { die("Connection failed: " . mysqli_connect_error()); }
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $query = "SELECT username from `food` where `username` = '$user_check' ";
   $ses_sql = mysqli_query($connection, $query);
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   
?>