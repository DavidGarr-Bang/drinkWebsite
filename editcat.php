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




                      
                      <!-- navigation links to pages in my website -->
       <header id="topnav">
          <div class="inner">
              <div class="logo" ><a href="home.html">Beverages</a></div>

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

                        <!--  title of my page (heading text) -->
                        <h3> Edit Category Infomation </h3><br><br>
                        <!--  links to pages to allow user to navigate to previous pages -->
  <h2><a href="login_success.php">Back to Admin main page</a></h2><br><br>
  <h3><a href="indexcat.php">View data in category table</a></h3><br><br>



  <?php

include './includecat/configcat.php'; //link to connection page for database

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
//get details from database for a particular id
$selectcategory="SELECT * FROM category WHERE categoryID=".$id;

$user=selectcategory($selectcategory);


if (isset($_POST['submit'])) {
    
       $categoryID = $_POST['categoryID'];
       $categoryName = $_POST['categoryName'];

       //updating details for a particular id

    $query = "UPDATE category SET categoryID='" . $categoryID . "',categoryName='" . $categoryName . "' WHERE categoryID=".$id;

    $update = updatecategory($query); //update category table

    //output messages to inform user 

    if ($update != 0) {
        echo 'category updated successfully';
    }else{
        echo 'error in update query';
    }
}
?>
<br>
<!-- form to allow users to update details  -->

<form method="post">
     <br><br>Category ID
    <input type="text" name="categoryID" value="<?php echo $user[0]['categoryID']; ?>"> <br>
     <br><br>Category Name
    <input type="text" name="categoryName" value="<?php echo $user[0]['categoryName']; ?>"> <br>
     <br><br>
    <input type="submit" name="submit" value="Edit">
   
</form>

<!-- footer containing copyright  -->
            <br><br><br>
               
        
</body>
</html>


