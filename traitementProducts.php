<?php
session_start();
require_once("./helper/connexion.php");
require_once("./helper/functions.php");

// RECUPERER INPUTS DU FORM PRODUCTS
if(isset($_REQUEST["newProduct"])) {
    $label = getInput("label");
    $description = getInput("description");
    $price = getInput("price");
    $quantity = getInput("quantity");

    // INSERER DATA DU FORMULAIRE PRODUCTS DANS LE DATABASE
    if($label == null || $price == null || $quantity == null){
        header("location:./products.php");
    }
    
    $sql = "INSERT INTO products(label, description, price, quantity, user_id) values(:label, :description, :price, :quantity, :user_id)";

    $params = [
        "label"=> $label,
        "description"=> $description,
        "price"=> $price,
        "quantity"=> $quantity,
        "user_id"=> $_SESSION["fetchUser"]["id"] 
    ];

    $stmt = $conn->prepare($sql);
    if($stmt->execute($params)){
        $_SESSION["success"]="Product added successfully";
        header("location:./products.php");
    } else{
        $_SESSION["error"]="Product add successfully failed ";
        header("location:./products.php");
    }
}


// FETCHER LES DATA DES PRODUCTS A PARTIR DE LA BASE DE DONNEE POUR AFFICHER SUR LA PAGE (LIST)



?>