<?php
//connect to database 
//contains user and password for database access
function getCon(){
    $con=new PDO("mysql:host=localhost:8889;dbname=BeveragesDB", "dbuser", "password");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}


//get data in the category table in the database
function selectcategory($query){
    $pdo= getCon();
    $stmt=$pdo->query($query);
    return $stmt->fetchAll(); 
}

//insert new data entered by the user into the category table in the database

function updatecategory($query){
    $pdo=getCon();
    $stmt=$pdo->prepare($query);
    return $stmt->execute();
}

?>