<?php
include('connection.php');

$user=$_POST['username'];
$pwd=$_POST['pass'];

$sql = "SELECT userid FROM user WHERE username = '$user' and password = '$pwd'";
$result = $conn->query($sql);
$count = $result->num_rows;
if($count == 1) {
    session_start();    
    $_SESSION['username'] = $user;
    echo "Variable de sesion ".$_SESSION['username'];
    header("Location: ../home.html");
   }else {
    $error = "Your Login Name or Password is invalid";
    header("Location: ../index.html");
    echo $error;
 }
 $conn->close();
?>