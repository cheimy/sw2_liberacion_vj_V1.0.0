<?php
include('connection.php');

$idproduct = $_GET['id'];

$sql = "DELETE FROM product WHERE idproduct = ".$idproduct;
$result = $conn->query($sql);
echo $sql;
header("Location: ../products.php");
?>
