<?php
//connect to database
$host = "localhost:8889";
$username ="root";
$password ="root";
$database = "BeveragesDB";

try
{
	$connect = new PDO ("mysql:host=$host;dbname=$database", $username,$password);

    if(isset($_POST['done']))
{ 
	
   //echo 'Database connected successfully';


    $userID = $_POST['userID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Admin = $_POST['Admin'];
   

    //inserting user details into the database

    $insert = $connect->prepare("INSERT INTO `UserDetails`(`userID`, `firstName`, `lastName`, `email`, `Username`, `Password`, `Admin`) VALUES (:userID,:firstName,:lastName,:email,:Username,:Password,:Admin)");

    $insert->bindParam(':userID',$userID);
    $insert->bindParam(':firstName',$firstName);
    $insert->bindParam(':lastName',$lastName);
    $insert->bindParam(':email',$email);
    $insert->bindParam(':Username',$Username);
    $insert->bindParam(':Password',$Password);
    $insert->bindParam(':Admin',$Admin);


    $insert->execute();
        
          header("location:index.php");  
        
       //  $message = '<a class="button" href="#huzzah"></a>'; 
        
        
}
}
catch(PDOException $error)

{
	echo $error->getMessage();
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
                            <link rel="sheet" href="css/welcome-popup2.css">
      
      
                          <link rel="stylesheet" href="css/nonfloatnew.css" type="text/css">
                            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                            <!-- link to style sheet for nav show-->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Monospace" rel="stylesheet2">
      
      
                            <!-- link to javascript doc.-->
                            <SCRIPT SRC="js/azalea copy.js"></SCRIPT>
                 </head>





    
                      
                      <!-- navigation links to pages in my website -->
    
    <header id="topnav">
          <div class="inner">
            <div class="logo" ><a href="home.html">Beverages</a></div>

                  <nav>
                      
                      
                          <label for="show-nav" class="show-nav"><i class="fa fa-align-justify" style="font-size:36px;"></i> </label>
                          <input type="checkbox" id="show-nav" role="button" class="navcheck">
                          <ul id="nav">
                 
                          <!-- link to html pages -->
                          <li><a  href="#">Home</a></li>
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
<!--                              <li><a  href="signup.php">Sign Up</a></li>-->
                          <li><a  href="loginazuser.php">Login</a></li>
<!--                          <li><a  href="loginazadmin.php">Admin</a></li>-->
                          </ul>
                 </nav>
  </div>
              </header>
    
<body >

  <!--________________ end of navigation___________________________ -->

      <!-- sign up form to allow users to create a user account-->  

<!--<form name="f2" method="post">
      
      <br><br>First Name
    <input type="text" name="firstName" placeholder="firstName">
      <br><br>Last Name
    <input type="text" name="lastName" placeholder="lastName">
      <br><br>Email
    <input type="text" name="email" placeholder="email">
      <br><br>Username
    <input type="text" name="Username" placeholder="Username">
      <br><br>Password
    <input type="text" name="Password" placeholder="Password">

 admin tinyint field not included   

      
    <br><br>
    <input type="submit" name="done" value="SignUp" onclick= "submit_actions()"> 


</form>-->
<!-- footer containing copyright  -->
    
    

    
    
    
    <div class="bucket">
   <div class="buffer">
     <div class="header">
       <h1 class="title">Join us</h1>
     </div>
        <form name="f2" method="post">
        <label>First name</label>
        <input type="text" name="firstName" style= " width: 100%; ">
        
        <label>Last name</label>
        <input type="text" name="lastName"  style= " width: 100%; "/>
          
        <label>Email</label>
        <input type="text" name="email"  style= " width: 100%; "/>
      
        <label>Username</label>
        <input type="text" name="Username"  style= " width: 100%; "/>
          
        <label>Password</label>
        <input type="text" name="Password"  style= " width: 100%; "/>
          
                    <button  style= " width: 100%; margin: 2em 0 0; " type="submit" name="done" value="SignUp" onclick="submit_actions()"  class="button button2">Sign Up</button>

            
<!--        <input type="submit" name="done" value="SignUp" onclick="submit_actions()"/>-->
      </form>
       
       
        <div class="form-footer">
           
    <p><a href="loginazuser.php">Use account to  sign in</a></p>
            
   <p><a href="loginazadmin.php">Sign in as Admin</a></p>
   
    
  </div>
  </div>
</div>



</body>
</html>



