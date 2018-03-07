
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

      <h3> Edit User Infomation </h3><br>
      <!--  links to pages to allow user to navigate to previous pages -->


  <h2><a href="login_success.php">Back to Admin main page</a></h2><br><br>
  
<h2>  <a href="indexuser.php">View data in User table</a></h2><br><br>

<?php

include './includeuser/configuser.php';//link to connection page

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
//get details from database for a particular id
$selectuser="SELECT * FROM UserDetails WHERE userID=".$id;

$user=selectuser($selectuser);


if (isset($_POST['submit'])) {

  


    
       $userID = $_POST['userID'];
       $firstName = $_POST['firstName'];
       $lastName = $_POST['lastName'];
       $email = $_POST['email'];
       $Username = $_POST['Username'];
       $Password = $_POST['Password'];
       $Admin = $_POST['Admin'];
         //updating details for a particular id

    $query = "UPDATE UserDetails SET userID='" . $userID . "',firstName='" . $firstName . "',lastName='" . $lastName. "',email='" . $email. "',Username='" . $Username. "',Password='" . $Password. "',Admin='" . $Admin. "' WHERE userID=".$id;

    $update = updateuser($query);
    //output messages
    if ($update != 0) {
        echo 'user details updated successfully';
    }else{
        echo 'error in update query';
    }
}
?>

<!-- form to allow users to update details  -->
<form method="post">
    <br><br>User ID
    <input type="text" name="userID" value="<?php echo $user[0]['userID']; ?>"> <br>
    <br><br>First Name
    <input type="text" name="firstName" value="<?php echo $user[0]['firstName']; ?>"> <br>
    <br><br>Last Name
    <input type="text" name="lastName" value="<?php echo $user[0]['lastName']; ?>"> <br>
    <br><br>Email
    <input type="text" name="email" value="<?php echo $user[0]['email']; ?>"> <br>
    <br><br>Username
    <input type="text" name="Username" value="<?php echo $user[0]['Username']; ?>"> <br>
    <br><br>Password
    <input type="text" name="Password" value="<?php echo $user[0]['Password']; ?>"> <br>
    <br><br>Admin
    <input type="text" name="Admin" value="<?php echo $user[0]['Admin']; ?>"> <br>
  

    <input type="submit" name="submit" value="Edit">
   
</form>

<!-- footer containing copyright  -->
   
</body>
</html>


