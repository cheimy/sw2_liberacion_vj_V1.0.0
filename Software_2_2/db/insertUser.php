<?php
include('connection.php');
$userid = $_POST['userid'];
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$role = $_POST['role'];

echo $userid . $username . $password . $name . $lastname . $role;


if(!empty($username) and !empty($password) and !empty($role)){
    $sql = "INSERT INTO user (userid, username,  password, name, lastname, role) VALUES ($userid, '$username ', '$password','$name','$lastname',$role); ";
    echo $sql;
    $result = $conn->query($sql);
    header("Location: ../user.php");
}

?>