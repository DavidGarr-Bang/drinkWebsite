
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
                         <link rel="stylesheet" href="css/nonfloatTest4.css" type="text/css">
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
                              <a href="#">drink 1</a>
                              <a href="#">drink 2</a>
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

  <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["email"]))  
 {  
      echo '<h3>Welcome - '.$_SESSION["email"].'</h3>';  //displays the email address of the user logged in 
     
 }  
 else  
 {  
      header("location:loginazuser.php"); //link to logout page 
}
 ?>  
            

 </body>
</html>





<?php

/* products.php
Stores info for products
*/

// Define product information
$products = array(
	1 => array(
		'name' => 'Jack Daniel',
		'price' => 10.99,
		'category' => 'whiskey',
		'description' => 'A delicious fruit juice drink thats perfect for the weekend!',
        'dinkIcon' => '<img src="https://www.thedailymeal.com/sites/default/files/styles/original/public/story/2016/Jack%20Daniel%27s.jpg?itok=Fv8MPMei" height="260" width="260">'

	),
	2 => array(
		'name' => 'Jim bean',
		'price' => 12.99,
		'category' => 'whiskey',
		'description' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem.',
        'dinkIcon' => '<img src="images/jim_beam.jpg" height="260" width="260">'

       
	),
	3 => array(
		'name' => 'jameson',
		'price' => 11.99,
		'category' => 'whiskey',
		'description' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',
        'dinkIcon' => '<img src="https://img.idlassets.com/prod/Product/153/promo/1/promo_384x384.jpg" height="260" width="260">'

	),
    4 => array(
		'name' => 'Jamesoni',
		'price' => 10.99,
		'category' => 'Cocktail',
		'description' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum ',
        'dinkIcon' => '<img src="https://realfood.tesco.com/media/images/164-FrozenStrawberryDaiquiris-LH-d53ca5a4-f31b-471c-8777-452fa090bbba-0-1400x919.jpg" height="260" width="260">'

	),
    
    5 => array(
		'name' => 'Tequila Sunrise',
		'price' => 10.99,
		'category' => 'Cocktail',
		'description' => 'A delicious fruit juice drink thats perfect for the weekend!',
        'dinkIcon' => '<img src="https://barprive.com/api/images/cocktails/512/tequila-sunrise.jpg" height="260" width="260">'

	),
	6 => array(
		'name' => 'Planters Punch',
		'price' => 12.99,
		'category' => 'Punch',
		'description' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem.',
        'dinkIcon' => '<img src=" https://barprive.com/api/images/cocktails/512/planters-punch.jpg" height="260" width="260">'

       
	),
	7 => array(
		'name' => 'Frozen Margarita',
		'price' => 11.99,
		'category' => 'Margarita',
		'description' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum',
        'dinkIcon' => '<img src="https://cdn.liquor.com/wp-content/uploads/2017/07/05150949/Frozen-Margarita-720x720-recipe.jpg"  height="260" width="260" >'

	),
    8 => array(
		'name' => 'Strawberry Daiquiri',
		'price' => 10.99,
		'category' => 'Cocktail',
		'description' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum ',
        'dinkIcon' => '<img src="images/jim_beam.jpg" height="260" width="260">'

	)
    
    
    
    
    
    
    
    
    
    
    
    
);

?>