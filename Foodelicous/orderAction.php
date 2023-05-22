<?php
error_reporting(0);
ini_set('display_errors', 0); 
$connection = mysqli_connect("localhost","root","","foodelicous");
if (!$connection) 
{ die("Connection failed: " . mysqli_connect_error()); }


$recipe = $_POST['recipe'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];

if(isset($recipe)){
echo $query = "INSERT INTO `orders`(`recipe`, `name`, `email`, `number`, `address`) VALUES ('$recipe','$uname','$email','$number','$address')"; 

echo $res2 = mysqli_query($connection, $query); 
header("Location:orderConfirmation.php?res=$res2");}
?>


<!doctype html>

<html>

<head>
<meta charset="UTF-8">
<title>Foodelicous.com</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>

<body>

<div id="header1">
<h2 id="head1_h2"> PROVIDING YOU DELICIOUS AND TEMPTING RECIPIES</h2>
</div>

<div id="header2">
<div class="wrap_search">
   <div class="search_home">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
		<div class="overlay_s">Search Function Under Construction</div>
	  <div id="button">
    <img src='img/search.png' />
</div>
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
<div>
	<div id="account">
	<a href="login.php" id="account">
		<img src="img/account.png" id="acc" alt=""></a>
		<div class="overlay_a">Account login and signin</div>
	</div>
		
	<a href="index.php">
	<img src="img/logo.png" id="foodlogo" alt=""></a>
</div>
</div>

<div id="recipes_r">
    <h1 id="home_h1">Order Details</h1>
  </div>

<div id="recipe" style="text-align:center;margin-bottom:20px;">
    <p id="o_h1" style="font-size:17px"> Your Order: <?php echo $_POST['recipes'] ?></p>
    <form method="post" action="">
    <input type="hidden" name="recipe" value="<?php echo $_POST['recipes']?>">
        <label>Name: </label>
        <input type="text" name="uname" /><br><br>

        <label>Phone Number: </label>
          <input type="text" name="number" /><br><br>

          <label>Email: </label>
          <input type="email" name="email" /><br><br>

          <label>Address: </label><br>
        <textarea id="textarea" rows="5" cols="60" name="address">
        </textarea><br><br>
        Payment:
        <input type="radio" name="type" />Cash On Delivery<br><br>
        <input id="submit" type="submit" name="psw" value="Place Order"/>
    </form>


