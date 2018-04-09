
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
                         <link rel="stylesheet" href="css/shoppcsstest.css" type="text/css">
                         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                         <!-- link to style sheet for nav show-->
                         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                         <script SRC="js/azalea.js"> </script>

                </head>

                

      <header id="topnav">
          <div class="inner">
        <div class="logo"><a href="home.html" style="  text-decoration:none;">Beverages</a></div>
                 <!-- navigation links to pages in my website -->
<nav>
                          <label for="show-nav" class="show-nav"><i class="fa fa-align-justify" style="font-size:36px;"></i> </label>
                          <input type="checkbox" id="show-nav" role="button" class="navcheck">
                          <ul id="nav">
                 
                              
                                  <li>
                             <a  href="./index.php?view_cart=1">  <i class='fa fa-shopping-basket cart-icon'></i>
                             </a></li>    
                          <!-- link to html pages -->
                         
                          <li class="dropdown">
                          <a href="#" class="dropbtn">Cocktails</a>
                          <div class="dropdown-content">
                             <a href="TequilaSunrise.html">Tequila Sunrise</a>
                              <a href="PlantersPunch.html">Planters Punch</a>
                         </div>
                          </li>
                          
                          <li><a  href="/index.php?checkout=1">Sale</a></li>
                         
                           
                              <?php  
  
 session_start();  
 if(isset($_SESSION["email"]))  
 {  
      echo '<li><a  href="login_usersuccess.php"> '.$_SESSION["email"].'</li>'; 
     
 }  
 
 ?>  
                              
                              
                              
                              
                          <li><a  href="index.php">Shop</a></li>

                          <li><a  href="home.html">Home</a></li>
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
		'category' => 'Whiskey',
		'description' => 'Jack Daniels is a brand of Tennessee whiskey and the top selling American whiskey in the world',
        'dinkIcon' => '<img src="https://i.pinimg.com/736x/c9/a3/68/c9a3683981c92f35dcdf7fccfcb33e2b--jack-daniels-whisky.jpg" height="480" width="480">'

	),
	2 => array(
          'itemID'=> 2,
		'name' => 'Jim Bean',
		'price' => 24.99,
		'category' => 'Whiskey',
		'description' => 'Jim Beam is a brand of bourbon whiskey produced in Clermont, Kentucky',
        'dinkIcon' => '<img src="images/jim_beam.jpg" height="480" width="480">'

       
	),
	3 => array(
          'itemID'=> 3,
		'name' => 'Jameson',
		'price' => 11.99,
		'category' => 'Whiskey',
		'description' => 'Jameson is a blended Irish whiskey produced by the Irish Distillers subsidiary of Pernod Ricard.',
        'dinkIcon' => '<img src="https://img.idlassets.com/prod/Product/153/promo/1/promo_384x384.jpg" height="480" width="480">'

	),
    4 => array(
          'itemID'=> 4,
		'name' => 'JagerMeister',
		'price' => 10.99,
		'category' => 'Cocktail',
		'description' => 'Jägermeister is a digestif made with 56 herbs and spices',
        'dinkIcon' => '<img src="images/jagermeister.jpg" height="480" width="480">'

	),
    
    5 => array(
          'itemID'=> 5,
		'name' => 'Skyy Vodka',
		'price' => 19.99,
		'category' => 'Cocktail',
		'description' => 'SKYY vodka is produced by the Campari America division of Campari Group of Milan, Italy',
        'dinkIcon' => '<img src="images/skyyvodka.jpg" height="480" width="480">'

	),
	6 => array(
          'itemID'=> 6,
		'name' => 'Belvedere',
		'price' => 30.85,
		'category' => 'Cognac',
		'description' => 'Belvedere Vodka is a brand of Polish rye vodka produced and distributed by LVMH.',
        'dinkIcon' => '<img src=" images/Belvedere.jpg" height="480" width="480">'

       
	),
	7 => array(
          'itemID'=> 7,
		'name' => 'Chivas Regal',
		'price' => 35.99,
		'category' => 'Whiskey',
		'description' => 'Chivas Regal is a blended Scotch whisky produced by Chivas Brothers, which is part of Pernod Ricard',
        'dinkIcon' => '<img src="images/chivasregal.jpg"  height="480" width="480" >'

	),
    8 => array(
          'itemID'=> 8,
		'name' => 'Bombay Sapphire',
		'price' => 21.99,
		'category' => 'gin',
		'description' => 'Bombay Sapphire is a brand of gin that was first launched in 1987 by IDV. In 1997 Diageo sold the brand to Bacardi',
        'dinkIcon' => '<img src="images/bombay.jpg" height="480" width="480">'

	),
     9 => array(
           'itemID'=> 9,
		'name' => 'Fireball Whiskey',
		'price' => 14.99,
		'category' => 'Whiskey',
		'description' => 'Fireball Cinnamon Whisky is a mixture of whisky, cinnamon flavoring and sweeteners that is produced by the Sazerac Company',
        'dinkIcon' => '<img src="images/fireball.jpg" height="480" width="480">'

	)
    
 
    
);

?>