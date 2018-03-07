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
                            <SCRIPT SRC="js/azalea copy.js"></SCRIPT>
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
                
              </div>
      </header>
      
<body>

  <!--________________ end of navigation___________________________ -->
   <h3> Edit and Delete Category Details</h3>
 <!--  links to pages to allow user to navigate to previous pages -->
<!--link to insert data form for category table-->


<h2><a href="login_success.php">Back to Admin main page</a></h2><br><br>
<h3><a href="insertAZcat.php">Insert data into category</a><br><br></h3>

<?php
include './includecat/configcat.php';//link to connection page to connect to database

$query = "SELECT * FROM category"; 
$data = selectcategory($query);

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    //deleting a record from table 
    //deletes data for the id specified then calls the updatecategory function to update the table 
    
        $delete="DELETE FROM category WHERE categoryID=".$id;
        $deleteUser=updatecategory($delete);

        if($deleteUser!=0){
            header("Location: indexcat.php");
        }else{
            echo 'error in Delete';//error message
        }    
    
}


?>

<!-- table displaying details from a table in the database    -->

<table>
    <tr class="tbl">
        <td>categoryID</td><td>category</td><td>Edit</td><td>Delete</td>
    </tr>

    <?php

    if(!empty($data)):
    foreach ($data as $user):
    ?>
    <tr>
        <td><?php echo $user['categoryID']; ?></td>
        <td><?php echo $user['categoryName']; ?></td>

         <!-- options to edit and delete records in the table   -->
        <td class="edit"><a href="editcat.php?id=<?php echo $user['categoryID']; ?>">Edit</a></td>
        <td class="delete"><a href="indexcat.php?deleteid=<?php echo $user['categoryID']; ?>">Delete</a></td>
    </tr>
    <?php
    endforeach;
    else:
        echo "<h4>No data in table!</h4>";//message if there are no more records in the table
    endif;
    ?>

    </table>
</body>
</html>




