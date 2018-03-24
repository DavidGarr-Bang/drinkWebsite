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

    <h3> View, Edit and Delete item infomation </h3><br><br>
 
<!--link to insert data form for category table-->
<h2><a href="login_success.php">Back to Admin main page</a></h2><br><br>
               
    <!--  links to pages to allow user to navigate to previous pages -->
 <h2><a href="insertitems.php">Insert data into item</a></h2> <br><br>
</body>
</html>
<?php
include './includeitems/configitems.php';//link to connection page to connect to database

$query = "SELECT * FROM item";
$data = selectitem($query);//calls function in the connection page above

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
       //deleting a record from table 
    
        $delete="DELETE FROM item WHERE itemID=".$id;
        $deleteUser=updateitem($delete);

        if($deleteUser!=0){
            header("Location: indexitems.php");
        }else{
            echo 'error in Delete';//error message
        }    
    
}


?>

<!-- table displaying details from a table in the database    -->
<table>
    <tr class="tbl">
        <td>itemID</td><td>categoryID</td><td>itemCode</td><td>itemName</td><td>itemDesc</td><td>price</td><td>StockNumber</td><td>Purchases</td><td>Edit</td><td>Delete</td>
    </tr>

    <?php

    if(!empty($data)):
    foreach ($data as $user):
    ?>
    <tr>
        <td><?php echo $user['itemID']; ?></td>
        <td><?php echo $user['categoryID']; ?></td>
        <td><?php echo $user['itemCode']; ?></td>
        <td><?php echo $user['itemName']; ?></td>
        <td><?php echo $user['itemDesc']; ?></td>
        <td><?php echo $user['price']; ?></td>
        <td><?php echo $user['StockNumber']; ?></td>
        <td><?php echo $user['Purchases']; ?></td>



         <!-- options to edit and delete records in the table   -->
        <td class="edit"><a href="edititems.php?id=<?php echo $user['itemID']; ?>">Edit</a></td>
        <td class="delete"><a href="indexitems.php?deleteid=<?php echo $user['itemID']; ?>">Delete</a></td>
    </tr>
    <?php
    endforeach;
    else:
        echo "<h4>No data in table!</h4>";//message if there are no more records in the table
    endif;
    ?>
