<?php
include('connection.php');
$idProduct = $_POST['idproduct'];
$name = $_POST['nameproduct'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$description = $_POST['description'];


if(!empty($name) and !empty($quantity) and !empty($price)){
    $sql = "INSERT INTO product (idproduct, name,  price, quantity, description) VALUES (NULL, '$name ', '$price','$quantity','$description'); ";
    echo $sql;
    $result = $conn->query($sql);
    header("Location: ../products.html");
}

?>