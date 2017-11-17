<? 
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <form class= "parallax-section" method="POST" action="./controller/db/validate_user.php">
    <fieldset>
        <legend><image src="images/team.png"/></legend>
                <div>
                    <input id="user" name ="user" type="text" placeholder="Usuario" align="right">
                </div>     
                <div>
                    <input id="password" name ="pwd" type="password" placeholder="Contraseña">
                </div>
                <div>
                    <select id="rol" name ="rol">
                        <option>Seleccione su rol</option>
                        <option>Administrador</option>
                        <option>Gerente de proyecto</option>
                    </select>
                </div></br>
                <div>
                    <input type="submit" value="Ingresar">
                </div> 
    </fieldset>
    </form>

            <!--form method="POST" action="./controller/db/validate_user.php" style="background-color:#d8d8d8;padding:50px;text-align:center;" class="Cell">
            <div>
                    <input id="user" name ="user" type="text" placeholder="Usuario">
                </div>
                <div>
                    <input id="password" name ="pwd" type="password" placeholder="Contraseña">
                </div>
                <div>
                    <select id="rol" name ="rol">
                        <option>Seleccione su rol</option>
                        <option>Administrador</option>
                        <option>Gerente de proyecto</option>
                    </select>
                </div></br>
                <div>
                    <input type="submit" value="Ingresar">
                </div> 
            </form-->       
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="controller/login.js"></script>
    
</body> 
</html>
