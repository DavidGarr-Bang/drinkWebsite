<?php
//connect to database 
$host = "localhost:8889";
$username ="root";
$password ="root";
$database = "BeveragesDB";

try
{
	$connect = new PDO ("mysql:host=$host;dbname=$database", $username,$password);
//connects to the database with the username and password stated above
    if(isset($_POST['done']))
{ 
	
   //echo 'Database Success';


    $itemID = $_POST['itemID'];
    $categoryID = $_POST['categoryID'];
    $itemCode = $_POST['itemCode'];
    $itemName = $_POST['itemName'];
    $itemDesc = $_POST['itemDesc'];
    $price = $_POST['price'];
    $StockNumber = $_POST['StockNumber'];
    
   //inserting details into a table in the database

    $insert = $connect->prepare("INSERT INTO `item`(`itemID`, `categoryID`, `itemCode`, `itemName`, `itemDesc`, `price`, `StockNumber`) VALUES (:itemID,:categoryID,:itemCode,:itemName,:itemDesc,:price,:StockNumber)");

    $insert->bindParam(':itemID',$itemID);
    $insert->bindParam(':categoryID',$categoryID);
    $insert->bindParam(':itemCode',$itemCode);
    $insert->bindParam(':itemName',$itemName);
    $insert->bindParam(':itemDesc',$itemDesc);
    $insert->bindParam(':price',$price);
    $insert->bindParam(':StockNumber',$StockNumber);
   

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
                           <li><a  href="signup.php">Sign Up</a></li>
                          <li><a  href="loginazuser.php">Login</a></li>
                          <li><a  href="loginazadmin.php">Admin</a></li>
                          </ul>
                 </nav>

           
  <!--________________ end of navigation___________________________ -->

 <h3> Insert Data into Items Table </h3><br>

    <!--  links to pages to allow user to navigate to previous pages -->

  <h2><a href="login_success.php">Back to Admin main page</a></h2><br><br>

   <h2> <a href="indexitems.php">View Data In Items Table</a></h2><br><br><!--link to data table -->

<!-- form to allow users to insert details  -->
<form method="post">
     <br><br>Item ID

    <input type="text" name="itemID" placeholder="itemID">
     <br> <br>Category ID 

    <input type="text" name="categoryID" placeholder="categoryID">
     <br><br>Item Code

    <input type="text" name="itemCode" placeholder="itemCode">
     <br><br>Item Name 

    <input type="text" name="itemName" placeholder="itemName">
     <br><br>Item Description

    <input type="text" name="itemDesc" placeholder="itemDesc">
     <br><br>Price

    <input type="text" name="price" placeholder="price">
     <br><br>StockNumber

      <input type="text" name="StockNumber" placeholder="StockNumber">
     <br><br>


    <input type="submit" name="done" value="insert">


</form>

</body>
</html>



