<?php
include('connection.php');

$userid = $_GET['id'];

$sql = "DELETE FROM user WHERE userid = ".$userid;
$result = $conn->query($sql);
echo $sql;
header("Location: ../user.php");
?>
