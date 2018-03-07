

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
                            <SCRIPT SRC="js/azalea.js"></SCRIPT>
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




 <h3> Edit item Infomation </h3><br><br>

   <!--  links to pages to allow user to navigate to previous pages -->


<h2><a href="login_success.php">Back to Admin main page</a></h2><br><br>


 <h2> <a href="indexitems.php">View data in item table</a></h2><br><br>
<br>
<?php


include './includeitems/configitems.php';//link to connection page for database

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
//get details from database for a particular id
$selectitem="SELECT * FROM item WHERE itemID=".$id;

$user=selectitem($selectitem);


if (isset($_POST['submit'])) {

  


    
       $itemID = $_POST['itemID'];
       $categoryID = $_POST['categoryID'];
       $itemCode = $_POST['itemCode'];
       $itemName = $_POST['itemName'];
       $itemDesc = $_POST['itemDesc'];
       $price = $_POST['price'];
        $StockNumber = $_POST['StockNumber'];
     
      //updating details for a particular id

    $query = "UPDATE `item` SET `itemID`='" . $itemID . "',categoryID='" . $categoryID . "',itemCode='" . $itemCode. "',itemName='" . $itemName. "',itemDesc='" . $itemDesc. "',price='" . $price."', StockNumber='" . $StockNumber . "' WHERE itemID=".$id;

    $update = updateitem($query); //update item table

        //output messages to inform user 

    if ($update != 0) {
        echo 'item details updated successfully';
    }else{
        echo 'error in update query';
    }
}
?>

<!-- form to allow users to update details  -->
<form method="post">
    <br><br> Item ID
    <input type="text" name="itemID" value="<?php echo $user[0]['itemID']; ?>"> <br>
    <br><br> Category ID
    <input type="text" name="categoryID" value="<?php echo $user[0]['categoryID']; ?>"> <br>
    <br><br>Item Code
    <input type="text" name="itemCode" value="<?php echo $user[0]['itemCode']; ?>"> <br>
    <br><br>Item Name
    <input type="text" name="itemName" value="<?php echo $user[0]['itemName']; ?>"> <br>
    <br><br>Item Description
    <input type="text" name="itemDesc" value="<?php echo $user[0]['itemDesc']; ?>"> <br>
    <br><br> Price
    <input type="text" name="price" value="<?php echo $user[0]['price']; ?>"> <br>
    <br><br> StockNumber
    <input type="text" name="StockNumber" value="<?php echo $user[0]['StockNumber']; ?>"> <br>
    <br><br>
    <input type="submit" name="submit" value="Edit">
   
</form>
<!-- footer containing copyright  -->

</body>
</html>


