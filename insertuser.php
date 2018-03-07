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
	
   //echo 'Database Success';


    $userID = $_POST['userID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Admin = $_POST['Admin'];
 

      //inserting details into a table in the database

    $insert = $connect->prepare("INSERT INTO `UserDetails`(`userID`, `firstName`, `lastName`, `email`, `Username`, `Password`, `Admin`) VALUES (:userID,:firstName,:lastName,:email,:Username,:Password,:Admin)");

    $insert->bindParam(':userID',$userID);
    $insert->bindParam(':firstName',$firstName);
    $insert->bindParam(':lastName',$lastName);
    $insert->bindParam(':email',$email);
    $insert->bindParam(':Username',$Username);
    $insert->bindParam(':Password',$Password);
    $insert->bindParam(':Admin',$Admin);


    $insert->execute();
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
                            <title>Beverages DB</title>
                            <meta charset="utf-8">
                              <!--  link to favicon -->
                              <link rel="shortcut icon" href="img/favicon.ico">
                              <!-- link to style sheets --> 
                            <link rel="stylesheet" href="css/normalize.css">
                            <link rel="stylesheet" href="css/style.css" type="text/css">
                            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                            <!-- link to style sheet for nav show-->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <!-- link to javascript doc.-->
                            <SCRIPT SRC="js/azalea.js"></SCRIPT>
                 </head>




<body>

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
                          <li><a href="#" class="dropbtn">drink</a></li>
                          <li class="dropdown">
                          <a href="#" class="dropbtn">Drinks</a>
                          <div class="dropdown-content">
                              <a href="#">item 1</a>
                              <a href="#">item 2</a>
                          </div>
                          </li>
                          <li><a  href="#.html">Sale</a></li>
                          <li><a  href="loginazadmin.php">Admin</a></li>
                          </ul>
                 </nav>


              
  <!--________________ end of navigation___________________________ -->

      <h3> Insert data into User table </h3><br>
 <!--  links to pages to allow user to navigate to previous pages -->
        <!--  links to pages to allow user to navigate to previous pages -->


  <h2><a href="login_success.php">Back to Admin main page</a></h2><br><br>

  <h2> <a href="indexuser.php">View data in User table</a></h2> <br><br>

<!-- form to allow users to insert details  -->
<form method="post">
      <br><br>User ID
    <input type="text" name="userID" placeholder="userID">
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
      <br><br>Admin 
    <input type="text" name="Admin" placeholder="Admin">
      
    <br><br>
    <input type="submit" name="done" value="insert">


</form>
<!-- footer containing copyright  -->
            <br><br><br>
               
        
</body>
</html>



