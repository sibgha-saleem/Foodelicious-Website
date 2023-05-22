
<?php
   include('session.php');
   $res1 = 0;
$res2 = 0;
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <title>Foodelicious.com</title>
    <link type="text/css" rel="stylesheet" href="stylesheet.css" />
  </head>

  <body>
    <div id="header1">
      <h2 id="head1_h2">PROVIDING YOU DELICIOUS AND TEMPTING RECIPIES</h2>
    </div>

    <div id="header2">
      <div class="wrap_search">
        <div class="search_home">
          <input
            type="text"
            class="searchTerm_recipe"
            placeholder="What are you looking for?"
          />
          <button type="submit" class="searchButton">
            <div class="overlay_s">Search Function Under Construction</div>
            <div id="button">
              <img src="img/search.png" />
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
        <li>
          <a href=" "> Apetizers and Snacks &raquo;</a>
          <ul>
            <li><a href="wraps.php"> Tortilla Wraps </a></li>
            <br />
            <li><a href="potato.php"> Potato Cutlets </a></li>
          </ul>
        </li>
        <li>
          <a href=" "> Main Dishes &raquo;</a>
          <ul>
            <li>
              <a href="chicken sauce.php">Grilled Chicken with Cheese</a>
            </li>
            <br />
            <li><a href="chicken.php">Smoked Tandori Chicken</a></li>
            <br />
            <li><a href="fish.php">Fish and Chips</a></li>
            <br />
            <li><a href="White pasta.php">White Sauce Pasta</a></li>
            <br />
            <li><a href="pasta.php">Pink Sauce Pasta</a></li>
            <br />
          </ul>
        </li>
        <li>
          <a href=" "> Desserts &raquo;</a>
          <ul>
            <li><a href="oreo.php">Oreo Delight</a></li>
            <br />
          </ul>
        </li>
        <li>
          <a href=" "> Keto Food &raquo;</a>
          <ul>
            <li>
              <a href="chicken sauce.php">Grilled Chicken with Cheese</a>
            </li>
            <br />
            <li><a href="grilled.php">Grilled Vegatables</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <div id="recipe_container">
      <img src="img/Oreo.jpg" style="width: 100%" />
    </div>

    <div id="recipes_r">
      <h1 id="home_h1">Oreo Delight Recipe</h1>
    </div>

    <div id="recipe">
      <ul id="r_ul">
        <li id="r_li">
          <img src="img/prep.png" style="margin-bottom: -15px" /> Preperation
          Time : 5 mins
        </li>
        <li id="r_li">
          <img src="img/cook.png" style="margin-bottom: -15px" /> Cooking Time :
          40 mins
        </li>
        <li id="r_li">
          <img src="img/total.png" style="margin-bottom: -15px" /> Total Time :
          45 mins
        </li>
        <li id="r_li">
          <img src="img/serving.png" style="margin-bottom: -15px" /> Servings :
          2-3 persons
        </li>
      </ul>
      <br />

      <h1 class="h1_r">Ingredients</h1>
      <ul id="r_ul2">
        <li id="r_li">2 pack whipping cream</li>
        <li id="r_li">2 half roles oreos</li>
        <li id="r_li">2 tablespoon Gelatin Powder</li>
        <li id="r_li">1 cup icing Sugar</li>
        <li id="r_li">3 tablespoons cocoa powder</li>
      </ul>

      <h1 class="h1_r">Method</h1>
      <ul id="r_ul2">
        <li id="r_li">
          Grease your dish with oil and make layerof crushed oreos.place it in
          refrigerator
        </li>
        <li id="r_li">
          For 2nd layer whip 1 chilled cream for 4-5 mins, add half cup sugar
          and cocoa powder. Add mixture of tablespoon of gelatin pwder with
          water to this mixture and mix. Refrigerate for 15 mins.
        </li>
        <li id="r_li">
          For third layer whip 1 pack of cream add half cup sugar and gelatin
          mixture. Layer over your 2nd layer and Refrigerateagain for 15 mins.
        </li>
        <li id="r_li">
          Decorate with crushed oreos and whipping cream and serve.
        </li>
      </ul>
    </div>

    <div id="recipes_r">
      <h1 id="home_h1">Comments</h1>
    </div>
<div id="recipe">

<?php
$connection = mysqli_connect("localhost","root","","foodelicous");
if (!$connection) 
{ die("Connection failed: " . mysqli_connect_error()); }
       


$sql = "SELECT * FROM `oreo`";
$result = mysqli_query($connection, $sql);
if(mysqli_num_rows($result)>0) {
    while($row=mysqli_fetch_array($result)) 
    { ?> <br>
    <h1 class="h1_r"><?php echo $row[1]; ?> </h1>
        <h3 id="c_p" style="margin-left:5%;margin-top:-10px;"> <?php echo $row[2]; ?> </h3><br>
        <?php } 
} 
else { ?>
<h3 id="c2" style="margin-left:40%"> No comments to show.</h3> <?php } ?>
<br><br>
<button type="button" onclick="asd(1)" id="insert" value="Add new Product" style="
  color: #d01f4e;
  font-weight: bold;
  font-family: `Patrick Hand`, cursive;
  font-size: 15px;
  border-color: #d01f4e;
  border-radius:5px;
  margin-left:35%;
  padding:10px">Click this if you want to add comment</button>
  <br><br>
<form id="asd" method="post" action="commentAction.php" style="text-align:center;">
  <input type="hidden" name="table" value="oreo">
          
  <label>Username:</label>
  <input type="text" name="username" /><br><br>

          <label>Comment:</label>
          <input type="text" name="comment"/><br><br>
          <button type="submit" name="submit" value="Add Comment" style="
  color: #d01f4e;
  font-weight: bold;
  font-family: `Patrick Hand`, cursive;
  font-size: 15px;
  border-color: #d01f4e;
  border-radius:5px;
  padding:10px">Add Comment</button>
</form>



<script type="text/javascript">

  window.onload = function() {

    document.getElementById("asd").style.display = "none";

  };

  function asd(a) {
  
    if (a == 1) {
      document.getElementById("asd").style.display = "block";
    } else {
      document.getElementById("asd").style.display = "none";
    }
      
  }
</script>
</div>

    <br><br><br>
<form method="post" action="orderAction.php">
<input type="hidden" name="recipes" value="Oreo Delight">
<label class="h1_r" style="margin-left:25%;">If you want to place order, press </label>
<button type="submit" name="order" value="Add Comment" style=" background-color: white;
  color: black;
  font-weight: bold;
  font-family: `Patrick Hand`, cursive;
  font-size: 30px;
  border-color: #d01f4e;
  border-radius:5px;
  padding:10px">Order</button>
</form>

    <div id="featuredrecipes">
      <h1 id="home_h1">Explore our Other Recipes</h1>
      <a href="fish.php">
        <div class="r1">
          <img src="img/fish_r.jpeg" id="oreo" style="width: 100%" />
          <div class="overlay_r">SEE FULL RECIPE</div>
          <h5>FISH</h5>
          <h6>Fish and Chips</h6>
        </div></a
      >
      <a href="grilled.php">
        <div class="r2">
          <img src="img/Grilled Veges.jpeg" id="grilled" style="width: 100%" />
          <div class="overlay_r">SEE FULL RECIPE</div>
          <h5>KETO</h5>
          <h6>Grilled Vegetables</h6>
        </div></a
      >
      <a href="chicken.php">
        <div class="r3">
          <img
            src="img/Tandoori Chicken.jpeg"
            id="tandoori"
            style="width: 100%"
          />
          <div class="overlay_r">SEE FULL RECIPE</div>
          <h5>CHICKEN</h5>
          <h6>Tandoori Chicken</h6>
        </div></a
      >
      <a href="White pasta.php">
        <div class="r4">
          <img src="img/White Pasta.jpeg" id="whitepasta" style="width: 100%" />
          <div class="overlay_r">SEE FULL RECIPE</div>
          <h5>PASTA</h5>
          <h6>White Sauce Pasta</h6>
        </div></a
      >
    </div>
    <div id="featuredrecipes" style="clear: both">
      <a href="chicken sauce.php">
        <div class="r1">
          <img
            src="img/chicken sauce_r.jpeg"
            class="recipe_img"
            style="width: 100%"
          />
          <div class="overlay_r">SEE FULL RECIPE</div>
          <h5>CHICKEN</h5>
          <h6>Grilled Chicken with Sauce</h6>
        </div></a
      >
      <a href="pasta.php">
        <div class="r2">
          <img
            src="img/pink pasta_r.jpg"
            class="recipe_img"
            style="width: 100%"
          />
          <div class="overlay_r">SEE FULL RECIPE</div>
          <h5>PASTA</h5>
          <h6>Pink Sauce Pasta</h6>
        </div></a
      >
      <a href="wraps.php">
        <div class="r3">
          <img src="img/wraps_r.jpeg" class="recipe_img" style="width: 100%" />
          <div class="overlay_r">SEE FULL RECIPE</div>
          <h5>APETIZERS</h5>
          <h6>Tortilla Wraps</h6>
        </div></a
      >
      <a href="potato.php">
        <div class="r4">
          <img src="img/potato_r.jpg" class="recipe_img" style="width: 100%" />
          <div class="overlay_r">SEE FULL RECIPE</div>
          <h5>APETIZERS</h5>
          <h6>Potato Cutlets</h6>
        </div></a
      >
    </div>
    <div id="footer">
      <img src="img/logo.png" class="foodlogo2" />
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
