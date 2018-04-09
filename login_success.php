<!DOCTYPE html>
          <html>

                <head>
                         <title>Admin Page</title>
                         <meta charset="utf-8">
                         <!--  link to favicon-->
                         <link rel="shortcut icon" href="img/favicon.ico">
                         <link rel="stylesheet" href="css/normalize.css">
                         <!-- link to style sheet -->
                         <link rel="stylesheet" href="css/adminnonfloat.css" type="text/css">
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
                 
                          <!-- link to html pages -->
                        
                          <li class="dropdown">
                          <a href="#" class="dropbtn">Cocktails</a>
                          <div class="dropdown-content">
                              <a href="#">drink 1</a>
                              <a href="#">drink 2</a>
                         </div>
                          </li>
                         
                          
                          <li><a  href="#.html">Sale</a></li>
                          <li><a  href="home.html">Home</a></li>
                              
                              
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
                               
                              <li><a  href="home.html">Home</a></li>
                         
                          </ul>
                 </nav>

               </div>
              </header>
 <body>
                
              <!-- _________end of nav _____________-->



               <!--  title of my page (heading text) -->
      

            <!--  php code to display admin email after they have logged in -->

  

              <br><br>
               
              



<!--link to insert data form for item table-->
<a href="indexitems.php"class='button'>View Items Data</a>

<!--link to insert data form for user table-->
<a href="indexuser.php" class='button'>View User Data</a>
     
<a href='indexcat.php' class='button'>View Category Data</a>

     
     
     
    
 </body>
</html>



