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
<?php
if(isset($_SESSION['login_user']))
      include('welcome.php');
    ?>
<nav id="navbar">
<ul>
	<li><a href =" " > Apetizers and Snacks &raquo;</a> 
		<ul>
			<li><a href ="wraps.php" > Tortilla Wraps </a> </li><br>
			<li><a href ="potato.php" > Potato Cutlets </a> </li><br>
		</ul>
	</li>	
	<li><a href =" " > Main Dishes  &raquo;</a>
		<ul>
			<li><a href ="chicken sauce.php" >Grilled Chicken with Cheese</a> </li><br>
			<li><a href ="chicken.php" >Smoked Tandori Chicken</a> </li><br>
			<li><a href ="fish.php" >Fish and Chips</a> </li><br>
			<li><a href ="White pasta.php" >White Sauce Pasta</a> </li><br>
            <li><a href ="pasta.php" >Pink Sauce Pasta</a> </li><br>
		</ul>
	</li>
	<li><a href =" " > Desserts  &raquo;</a>
		<ul>
			<li><a href ="oreo.php">Oreo Delight</a> </li><br>
		</ul>
	</li>
	<li><a href =" " > Keto Food  &raquo;</a> 
		<ul>
			<li><a href ="chicken sauce.php">Grilled Chicken with Cheese</a> </li><br>
			<li><a href ="grilled.php">Grilled Vegatables</a> </li>
		</ul>
	</li>
</ul>
</nav>


<div id="recipe" style="padding:30px;">
<h1 class="h1_r" style="margin-left:40%;">Contact Us</h1>
<p style="text-align:center;font-size:20px;">If you have any questions or concerns, please contact us.
<br>Email:&emsp;<a href="foodelicious@gmail.com">foodelicious@gmail.com</a>
<br>Phone Number: &emsp; +92 123 45678912
</p>
</div>


<div id="footer">
<img src="img/logo.png" class="foodlogo2">
<div id="connect">
	<h4>CONNECT</h4>
	<a href="https://www.facebook.com/">
	  <img class="facebook" src="img/facebook.png"
	/></a>
	<a href="https://www.twitter.com/">
	  <img class="twitter" src="img/twitter.png"
	/></a>
	<a href="https://www.instagram.com/">
	  <img class="insta" src="img/insta.png"
	/></a>
  </div>
<div id="information">
<h4>INFORMATION</h4>
<ul>
	<li><a href="about.php">About us</a><li>
	<li><a href="orderInfo.php">Order Information</a><li>
	<li><a href="contact.php">Contact Us </a><li>
</ul>
</div>

&copy; 2021 Foodelicious.com All Rights Reserved.
</div>




</body>

</html>