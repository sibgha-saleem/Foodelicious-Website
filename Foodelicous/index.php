<?php
   include('session.php');
   $res1 = 0;
$res2 = 0;
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


<div class="w3-content w3-display-container" style="z-index: 0;">
    <a href ="oreo.php"><img class="mySlides w3-animate-fading" src="img/Oreo.jpg" style="width:100%"></a>
		<a href ="pasta.php"><img class="mySlides w3-animate-fading" src="img/pink pasta.jpg" style="width:100%"></a>
		<a href ="chicken.php"><img class="mySlides w3-animate-fading" src="img/tandoori.jpg" style="width:100%"></a>

	<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)"  style="clear: both;">&#10094;</button>
	<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" style="clear:both">&#10095;</button>
  </div>
  
  <script>
  var slideIndex = 1;
  showDivs(slideIndex);
  
  function plusDivs(n) {
	showDivs(slideIndex += n);
  }
  
  function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
	if (n > x.length) {slideIndex = 1}
	if (n < 1) {slideIndex = x.length}
	for (i = 0; i < x.length; i++) {
	  x[i].style.display = "none";  
	}
	x[slideIndex-1].style.display = "block";  
  }
  </script>

<div class="recipes">
<h3 id="home_h3">Explore our Recipes Range</h3>
<div >

<div class="recipesrange">
<a href ="chicken sauce.php"><img class="chicken" src="img/chicken.png"></a>
<a href ="White pasta.php"><img class="pasta" src="img/pasta.png"></a>
<a href ="fish.php"><img class="fish" src="img/fish.png"></a>
<a href ="oreo.php"><img class="desserts" src="img/desserts.png"></a>
<a href ="wraps.php"><img class="wraps" src="img/wraps.png"></a>
<a href ="grilled.php"><img class="keto" src="img/keto.png"></a>
</div>

<div id="featuredrecipes">
	<h1 id="home_h1">Our Featured Recipes</h1>
        <a href ="oreo.php">
		<div class="r1">
				<img src="img/Oreo Delight.jpeg" id="oreo"style="width:100%" >
				<div class="overlay">SEE FULL RECIPE</div>
				<h5> DESSERTS</h5>
				<h6> Oreo Delight</h6>
		</div></a>

        <a href ="grilled.php">
		<div class="r2">
				<img src="img/Grilled Veges.jpeg" id="grilled" style="width:100%">
				<div class="overlay">SEE FULL RECIPE</div>
				<h5> KETO</h5>
				<h6> Grilled Vegetables</h6>
		</div></a>

        <a href ="chicken.php">
		<div class="r3">
				<img src="img/Tandoori Chicken.jpeg" id="tandoori" style="width:100%">
				<div class="overlay">SEE FULL RECIPE</div>
				<h5> CHICKEN</h5>
				<h6> Tandoori Chicken</h6>
		</div></a>

        <a href ="White pasta.php">
		<div class="r4">
				<img src="img/White Pasta.jpeg" id="whitepasta" style="width:100%">
				<div class="overlay">SEE FULL RECIPE</div>
				<h5> PASTA</h5>
				<h6> White Sauce Pasta</h6>
		</div></a>
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