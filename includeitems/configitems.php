<?php
//connect to database 
//contains user and password for database access
function getCon(){
    $con=new PDO("mysql:host=localhost:8889;dbname=BeveragesDB", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}


//get data in the item table in the database
function selectitem($query){
    $pdo= getCon();
   
    $stmt=$pdo->query($query);
    return $stmt->fetchAll(); 
}

//insert new data entered by the user into the item table in the database
function updateitem($query){
    $pdo=getCon();
    
    $stmt=$pdo->prepare($query);
    return $stmt->execute();
}




//insert new data entered by the user into the item table in the database
function insertitem($query){
    $pdo=getCon();
    
    $stmt=$pdo->prepare($query);
    return $stmt->execute();
}




?>