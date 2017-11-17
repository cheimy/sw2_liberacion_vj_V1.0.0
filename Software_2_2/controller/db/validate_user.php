<?
include('connection.php');

$user=$_POST['user'];
$pwd=$_POST['pwd'];

$sql = "SELECT id_usr FROM user WHERE usrname = '$user' and pwd = '$pwd'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);


if($count == 1) {
   
    session_start();    
    $_SESSION['username'] = $user;
    echo "Variable de sesion ".$_SESSION['username'];
    echo "<script language=\"javascript\">window.location.href=\"../../views/home.php\";</script>";
 }else {
    $error = "Your Login Name or Password is invalid";
    echo "<script language=\"javascript\">alert('Usuario o clave inválido');</script>";
 }

$conn->close();
?>