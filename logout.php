<?php   
//allows user to logout of their account
 //logout.php  
 session_start();  
 session_destroy();  
 header("location:loginazadmin.php");  //once user logs out they are rediredted to the login page 
 ?>  