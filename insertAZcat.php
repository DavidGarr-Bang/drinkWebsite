<?php
//connect to database 
$host = "localhost:8889";
$username ="dbuser";
$password ="password";
$database = "BeveragesDB";

try
{
	$connect = new PDO ("mysql:host=$host;dbname=$database", $username,$password);//connects to the database with the username and password stated above

    if(isset($_POST['done']))
{ 
    $categoryID = $_POST['categoryID'];
    $categoryName = $_POST['categoryName'];
   
 //inserting details into a table in the database
    $insert = $connect->prepare("INSERT INTO `category`(`categoryID`, `categoryName`) VALUES (:categoryID,:categoryName)");

    $insert->bindParam(':categoryID',$categoryID);
    $insert->bindParam(':categoryName',$categoryName);

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
                            <title>BeveragesDB</title>
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
                            <SCRIPT SRC="js/azalea copy.js"></SCRIPT>
                 </head>




<body>

                      
                      <!-- navigation links to pages in my website -->

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
                          <li><a href="#" class="dropbtn">drink</a></li>
                          <li class="dropdown">
                          <a href="#" class="dropbtn">Drinks</a>
                          <div class="dropdown-content">
                              <a href="#">item 1</a>
                              <a href="#">item 2</a>
                          </div>
                          </li>
                          <li><a  href="#.html">Sale</a></li>
                           <li><a  href="signup.php">Sign Up</a></li>
                          <li><a  href="loginazuser.php">Login</a></li>
                          <li><a  href="loginazadmin.php">Admin</a></li>
                          </ul>
                 </nav>


  <!--________________ end of navigation___________________________ -->


                        <!--  title of my page (heading text) -->

 <h3 class = "signup"> Insert Data into Categories Table </h3><br><br>
    <!--  links to pages to allow user to navigate to previous pages -->
<h2><a href="login_success.php">Back to Admin main page</a></h2><br><br>
  <h2><a href="indexcat.php">View Data In Items Table</a><br><br></h2><!--link to data table -->

  

<br>
<!-- form to allow users to insert details  -->
<form id= formcat method="post">
     Category ID:<br>
    <input type="text" name="categoryID" placeholder="categoryID">
    <br>
     Category Name<br>
    <input type="text" name="categoryName" placeholder="categoryName">
    <br>
    <br>
    <input type="submit" name="done" value="insert">


</form>

<!-- footer containing copyright  -->
            <br><br><br>
               
           <footer id= footer>
                   &copy;Student ID - 21286928. <br>
                   AzaleaFlowers.com <br>
                   Email:azaleaflowers@hotmail.com<br> 
                   Call us at: 07477278836<br>
                      
           </footer>
</body>
</html>