<?php
     include "../model/connect.php";
     session_start();
      
     $id = $_GET["id"];
     if(empty($_SESSION["cart"][$id])){
        $query = "SELECT * FROM products where id=$id";
        $product= getOne($query); 
        $_SESSION["cart"][$id]["image"]= $product["image"];
        $_SESSION["cart"][$id]["productName"]= $product["productName"];
        $_SESSION["cart"][$id]["productPrice"]= $product["productPrice"];
        $_SESSION["cart"][$id]["quantity"]= 1;
       
     }else{
    
       $_SESSION["cart"][$id]["quantity"]++;
     }
    
    header("location:./index.php");

?>