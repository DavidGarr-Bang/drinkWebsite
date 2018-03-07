<?php

function getCon(){
    $con=new PDO("mysql:host=localhost;port=8889;dbname=BeveragesDB", "dbuser", "password");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}

function selectuser($query){
    $pdo= getCon();
   
    $stmt=$pdo->query($query);
    return $stmt->fetchAll(); 
}

function updateuser($query){
    $pdo=getCon();
    
    $stmt=$pdo->prepare($query);
    return $stmt->execute();
}

?>