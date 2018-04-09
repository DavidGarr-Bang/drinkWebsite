<!DOCTYPE html>
<html>
<head>         
                            <title>Beverages edit Drinks</title>
                            <meta charset="utf-8">
                              <!--  link to favicon -->
                              <link rel="shortcut icon" href="img/favicon.ico">
                              <!-- link to style sheets --> 
                            <link rel="stylesheet" href="css/normalize.css">
                            <link rel="stylesheet" href="css/adminnonfloat.css" type="text/css">
                            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                            <!-- link to style sheet for nav show-->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <!-- link to javascript doc.-->
                            <SCRIPT SRC="js/azalea.js"></SCRIPT>
                 </head>


<body>
  <!-- navigation links to pages in my website -->

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
                             <a href="TequilaSunrise.html">Tequila Sunrise</a>
                              <a href="PlantersPunch.html">Planters Punch</a>
                         </div>
                          </li>
                          
                          <li><a  href="/index.php?checkout=1">Sale</a></li>
                         
                           
  
                              
                              
                              
                              
                          <li><a  href="index.php">Shop</a></li>

                          <li><a  href="home.html">Home</a></li>
                          </ul>

                 </nav>
              </div>
                
</header>

             

  <!--________________ end of navigation___________________________ -->

  
 

<?php
include './includeitems/configitems.php';//link to connection page to connect to database

$query = "SELECT * FROM item";



$data = selectitem($query);//calls function in the connection page above

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
       //deleting a record from table 
    
        $delete = "DELETE FROM item WHERE itemID=".$id;
        $deleteUser = updateitem ($delete);

        if( $deleteUser != 0){
            header("Location: indexitems.php");
        }else{
            echo 'error in Delete';//error message
        }    
    
}


?>

    
<a href="login_success.php" class="button">Back to Admin main page</a>
               
    <!--  links to pages to allow user to navigate to previous pages -->
 <a href="insertitems.php" class="button" >Insert data into item</a> 
<!-- table displaying details from a table in the database    -->
    
    
    
<table>
    <tr class="tbl">
        <td>itemID</td><td>categoryID</td><td>itemName</td><td>itemDesc</td><td>price</td><td>StockNumber</td><td>Purchases</td><td>Edit</td><td>Delete</td>
    </tr>

    <?php

    if(!empty($data)):
    foreach ($data as $user):
    ?>
    <tr>
        <td><?php echo $user['itemID']; ?></td>
        <td><?php echo $user['categoryID']; ?></td>
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
<!--link to insert data form for category table-->

    </table>
</body>
</html>