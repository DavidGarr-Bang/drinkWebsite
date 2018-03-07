<!DOCTYPE html>
          <html>

                <head>
                         <title>BeveragesDB</title>
                         <meta charset="utf-8">
                         <!--  link to favicon-->
                         <link rel="shortcut icon" href="img/favicon.ico">
                         <link rel="stylesheet" href="css/normalize.css">
                         <!-- link to style sheet -->
                         <link rel="stylesheet" href="css/nonfloat.css" type="text/css">
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
                        
                              
                              
                              <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["email"]))  
 {   
      echo '<li><a href="logout.php">Logout</a></li>';//link to logout of account  
 }  
 else  
 {  
      header("location:logout.php");  //link to logout page
 }  


 ?>  
                         
                          </ul>
                 </nav>

               </div>
              </header>
 <body>
                
              <!-- _________end of nav _____________-->



               <!--  title of my page (heading text) -->
      
                         <h1>ADMIN PAGE</h1>

            <!--  php code to display admin email after they have logged in -->

  <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["email"]))  
 {  
      echo '<h3>Welcome - '.$_SESSION["email"].'</h3>';  

 }  
 else  
 {  
      header("location:logout.php");  //link to logout page
 }  


 ?>  

              <br><br>
               
              

<!--link to insert data form for category table-->
<h2><a href="indexcat.php">View Category Data</a></h2><br><br>


<!--link to insert data form for item table-->
<h2><a href="indexitems.php">View Items Data</a></h2><br><br>

<!--link to insert data form for user table-->
<h2><a href="indexuser.php">View User Data</a></h2><br><br>

 </body>
</html>



