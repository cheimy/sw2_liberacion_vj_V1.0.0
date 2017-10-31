<? 
/*$error = $_GET['result'];
if($error != ''){
    echo "Your Login Name or Password is invalid";
}*/
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
    </head>
<body>
        <!--<div><p>Bienvenido</p></div>
            <div id="content_user">
                <label>Usuario:</label>
                <input id="user" type="text">
            </div>
            <div id="content_pass">
                    <label>Clave:</label>
                    <input id="password" type="text">
            </div>
            </br>
            <div>
                <button href="#" id="ingresar" onclick="checho()">Ingresar</button>
            </div>-->
            
            <form method="POST" action="./controller/db/validate_user.php">
                <input id="user" name ="user" type="text" placeholder="User">
                <input id="password" name ="pwd" type="password" placeholder="Password">
                <input type="submit" value="Login">
            </form>
            
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="controller/login.js"></script>
    
</body> 
</html>
