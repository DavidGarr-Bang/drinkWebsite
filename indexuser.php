<!DOCTYPE html>
<html>
  <head>         
                            <title>Azalea Flowers</title>
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
  
  <h3> View, Edit and Delete User infomation </h3><br>
   <!--  links to pages to allow user to navigate to previous pages -->

 

  <h2><a href="login_success.php">Back to Admin main page</a></h2><br><br>
  
  <h2> <a href="insertuser.php">Insert data into user</a></h2><br><br>
<br>
</body>
</html>
<?php
include './includeuser/configuser.php';//link to connection page to connect to database

$query = "SELECT * FROM UserDetails";
$data = selectuser($query);

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

       //deleting a record from table 
    
        $delete="DELETE FROM UserDetails WHERE userID=".$id;
        $deleteUser=updateuser($delete);

        if($deleteUser!=0){
            header("Location: indexuser.php");
        }else{
            echo 'error in delete';//error message
        }    
    
}


?>

<!-- table displaying details from a table in the database    -->


<table>
    <tr class="tbl">
        <td>userID</td><td>firstName</td><td>lastName</td><td>email</td><td>Username</td><td>Password</td><td>Admin</td><td>Edit</td><td>Delete</td>
    </tr>

    <?php

    if(!empty($data)):
    foreach ($data as $user):
    ?>
    <tr>
        <td><?php echo $user['userID']; ?></td>
        <td><?php echo $user['firstName']; ?></td>
        <td><?php echo $user['lastName']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['Username']; ?></td>
        <td><?php echo $user['Password']; ?></td>
        <td><?php echo $user['Admin']; ?></td>
       
        <!-- options to edit and delete records in the table   -->
        <td class="edit"><a href="edituser.php?id=<?php echo $user['userID']; ?>">Edit</a></td>
        <td class="delete"><a href="indexuser.php?deleteid=<?php echo $user['userID']; ?>">Delete</a></td>
    </tr>
    <?php
    endforeach;
    else:
        echo "<h4>No data in table!</h4>";//message if there are no more records in the table
    endif;
    ?>
