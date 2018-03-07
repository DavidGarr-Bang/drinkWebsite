<?php  
//connect to database with password to ensure that the connection to the database is authorised

 session_start();  
 $host = "localhost:8889";  
 $email = "root";  
 $Password = "root";  
 $database = "BeveragesDB";  
 try  
 {  
      $con = new PDO("mysql:host=$host; dbname=$database", $email, $Password);  
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["email"]) || empty($_POST["Password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
            //query to check the user details are stored on the databases
                $query = "SELECT * FROM UserDetails WHERE email = :email AND Password = :Password";  
                $statement = $con->prepare($query);  
                $statement->execute(  
                     array(  
                          'email'     =>     $_POST["email"],  
                          'Password'     =>     $_POST["Password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["email"] = $_POST["email"];  
                     header("location:login_success.php");  //opens admin page if user details match
                }  
                else  
                {  
                     $message = '<label>incorrect details</label>';  //output if the details do not match
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
       <head>         
                            <title>BeveragesDB</title>
                            <meta charset="utf-8">
                            <!--  link to favicon -->
                            <link rel="shortcut icon" href="img/favicon.ico">
                            <!-- link to style sheets --> 
                            <link rel="stylesheet" href="css/normalize.css">
                            <link rel="stylesheet" href="css/nonfloat.css" type="text/css">
                            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                            <!-- link to style sheet for nav show-->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <!-- link to javascript doc.-->
                            <SCRIPT SRC="js/azalea.js"></SCRIPT>
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
<!--                           <li><a  href="signup.php">Sign Up</a></li>-->

                          <li><a  href="loginazuser.php">Login</a></li>
<!--                          <li><a  href="loginazadmin.php">Admin</a></li>-->
                          </ul>
                 </nav>

              </div>
              </header>
              
              
  <!--________________ end of navigation___________________________ -->


                        <!--  title of my page (heading text) -->
<body>  
          
            
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>'; //error messages
                }  
                ?>  
                 
               <!-- <form method="post">  
                     <label>email</label>  
                     <input type="text" name="email" />  
                     <br />  
                     <label>Password</label>  
                     <input type="Password" name="Password" />  
                     <br>  
                     <input type="submit" name="login" value="Login" />  
                </form>  
        -->
          
          
          
<div class="bucket">
   <div class="buffer">
     <div class="header">
       <h1 class="title">Admin Sign In</h1>
     </div>
       
      <form  method="post">
        <label>Email</label>
        <input type="text" name="email" style= " width: 100%; ">
        
        <label>Password</label>
          
        <input type="Password" name="Password" style= " width: 100%; "/>
          
        <button  style= " width: 100%; margin: 2em 0 0; " type="submit" name="login" value="Login" class="button button2">Sign in</button>

    
<!--        <input type="submit" name="login" value="Login" />  -->
       </form>
       
       
       
         <div class="form-footer">
           
    <p><a href="signup.php">Create an account and join us</a></p>
    <p><a href="loginazuser.php">Sign in as User</a></p>
    
  </div>
  </div>
</div>
           <br>  


           <!-- footer containing copyright  -->
            <br><br><br>
               
          
      </body>  
 </html>  