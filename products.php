
<!DOCTYPE html>
          <html>

                <head>
                         <title>Beverages Shop</title>
                         <meta charset="utf-8">
                         <!--  link to favicon-->
                    
                         <link rel="shortcut icon" href="img/favicon.ico">
                    
                     <link rel="stylesheet" href="css/shopping-cart_icon-css.css" type="text/css">
                    
                         <link rel="stylesheet" href="css/normalize.css">
                         <!-- link to style sheet -->
                         <link rel="stylesheet" href="css/nonfloatTest7.css" type="text/css">
                         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                         <!-- link to style sheet for nav show-->
                         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                         <script SRC="js/azalea.js"> </script>

                </head>

                

      <header id="topnav">
          <div class="inner">
              <div class="logo" ><a href="home.html">Beverages</a></div>
                 <!-- navigation links to pages in my website -->
<nav>
                          <label for="show-nav" class="show-nav"><i class="fa fa-align-justify" style="font-size:36px;"></i> </label>
                          <input type="checkbox" id="show-nav" role="button" class="navcheck">
                          <ul id="nav">
                 
                          <!-- link to html pages -->
                          <li><a  href="home.html">Home</a></li>
                          <li class="dropdown">
                          <a href="#" class="dropbtn">Cocktails</a>
                          <div class="dropdown-content">
                             <a href="TequilaSunrise.html">Tequila Sunrise</a>
                              <a href="PlantersPunch.html">Planters Punch</a>
                         </div>
                          </li>
                          <li class="dropdown">
                          <a href="#" class="dropbtn">Drinks</a>
                          <div class="dropdown-content">
                              <a href="#">item 1</a>
                              <a href="#">item 2</a>
                          </div>
                          </li>
                          <li><a  href="#.html">Sale</a></li>
                          <li><a  href="loginazuser.php">Login</a></li>
                            <li><a  href="index.php">Shop</a></li>
                              <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["email"]))  
 {  
      echo '<li><a  href="login_usersuccess.php"> '.$_SESSION["email"].'</li>';  //displays the email address of the user logged in 
     
 }  
 
 ?>  
                              
                              
                              
                              
                              
                                <li><a  href="loginazuser.php">log out</a></li>

                         <li>
                             <a  href="./index.php?view_cart=1">  <div class="icon-cart" style="float: left">
    <div class="cart-line-1" style="background-color: #E5E9EA"></div>
    <div class="cart-line-2" style="background-color: #E5E9EA"></div>
    <div class="cart-line-3" style="background-color: #E5E9EA"></div>
    <div class="cart-wheel" style="background-color: #E5E9EA"></div>
  </div>
                             </a></li>    
                        
                              
                              
                          </ul>

                 </nav>
              </div>
                
</header>
                
                  <body>
              <!-- _________end of nav _____________-->

                        

            <!--  php code to display user email after they have logged in -->

  
            

 </body>
</html>





<?php

/* products.php
Stores info for products
*/

// Define product information
$products = array(
	1 => array(
        'itemID'=> 1,
		'name' => 'Jack Daniel',
		'price' => 28.99,
		'category' => 'whiskey',
		'description' => 'Jack Daniels is a brand of Tennessee whiskey and the top selling American whiskey in the world',
        'dinkIcon' => '<img src="https://i.pinimg.com/736x/c9/a3/68/c9a3683981c92f35dcdf7fccfcb33e2b--jack-daniels-whisky.jpg" height="480" width="480">'

	),
	2 => array(
		'name' => 'Jim Bean',
		'price' => 24.99,
		'category' => 'whiskey',
		'description' => 'Jim Beam is a brand of bourbon whiskey produced in Clermont, Kentucky',
        'dinkIcon' => '<img src="images/jim_beam.jpg" height="480" width="480">'

       
	),
	3 => array(
		'name' => 'Jameson',
		'price' => 11.99,
		'category' => 'whiskey',
		'description' => 'Jameson is a blended Irish whiskey produced by the Irish Distillers subsidiary of Pernod Ricard.',
        'dinkIcon' => '<img src="https://img.idlassets.com/prod/Product/153/promo/1/promo_384x384.jpg" height="480" width="480">'

	),
    4 => array(
		'name' => 'JagerMeister',
		'price' => 10.99,
		'category' => 'Cocktail',
		'description' => 'Jägermeister is a digestif made with 56 herbs and spices',
        'dinkIcon' => '<img src="images/jagermeister.jpg" height="480" width="480">'

	),
    
    5 => array(
		'name' => 'Skyy Vodka',
		'price' => 19.99,
		'category' => 'Cocktail',
		'description' => 'SKYY vodka is produced by the Campari America division of Campari Group of Milan, Italy',
        'dinkIcon' => '<img src="images/skyyvodka.jpg" height="480" width="480">'

	),
	6 => array(
		'name' => 'Belvedere',
		'price' => 30.85,
		'category' => 'Cognac',
		'description' => 'Belvedere Vodka is a brand of Polish rye vodka produced and distributed by LVMH.',
        'dinkIcon' => '<img src=" images/Belvedere.jpg" height="480" width="480">'

       
	),
	7 => array(
		'name' => 'Chivas Regal',
		'price' => 35.99,
		'category' => 'whiskey',
		'description' => 'Chivas Regal is a blended Scotch whisky produced by Chivas Brothers, which is part of Pernod Ricard',
        'dinkIcon' => '<img src="images/chivasregal.jpg"  height="480" width="480" >'

	),
    8 => array(
		'name' => 'Bombay Sapphire',
		'price' => 21.99,
		'category' => 'gin',
		'description' => 'Bombay Sapphire is a brand of gin that was first launched in 1987 by IDV. In 1997 Diageo sold the brand to Bacardi',
        'dinkIcon' => '<img src="images/bombay.jpg" height="480" width="480">'

	),
     9 => array(
		'name' => 'Fireball Whiskey',
		'price' => 14.99,
		'category' => 'whiskey',
		'description' => 'Fireball Cinnamon Whisky is a mixture of whisky, cinnamon flavoring and sweeteners that is produced by the Sazerac Company',
        'dinkIcon' => '<img src="images/fireball.jpg" height="480" width="480">'

	)
    
 
    
);

?>