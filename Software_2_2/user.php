<!-- 
* 
-->
<?php
include('db/connection.php');
?>s
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/material.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <!-- navBar -->
    <div class="full-width navBar">
        <div class="full-width navBar-options">
            <i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>
            <div class="mdl-tooltip" for="btn-menu">Menu</div>
            <nav class="navBar-options-list">
                <ul class="list-unstyle">
                    <li class="btn-exit" id="btn-exit">
                        <i class="zmdi zmdi-power"></i>
                        <div class="mdl-tooltip" for="btn-exit">Cerrar sesión</div>
                    </li>
                    <li class="text-condensedLight noLink"><small>Usuario</small></li>
                    <li class="noLink">
                        <figure>
                            <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                        </figure>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- navLateral -->
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class="zmdi zmdi-close btn-menu"></i> Inventario
            </div>
            <figure class="full-width" style="height: 77px;">
                <div class="navLateral-body-cl">
                    <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                </div>
                <figcaption class="navLateral-body-cr hide-on-tablet">
                    <span>
						Pruebas Integración Continua<br>
						<small>Admin</small>
					</span>
                </figcaption>
            </figure>
            <div class="full-width tittles navLateral-body-tittle-menu">
                <i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; DASHBOARD</span>
            </div>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                    <li class="full-width">
                        <a href="home.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-view-dashboard"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                HOME
                            </div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="products.php" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                PRODUCTOS
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="user.php" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-face"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                USUARIOS
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- pageContent -->
    <section class="full-width pageContent">
        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="zmdi zmdi-face"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Información de los Usuarios.
                </p>
            </div>
        </section>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#tabNewClient" class="mdl-tabs__tab is-active">Nuevo usurio</a>
                <a href="#tabListClient" class="mdl-tabs__tab">Lista de usuarios</a>
            </div>
            <div class="mdl-tabs__panel is-active" id="tabNewClient">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                        <div class="full-width panel mdl-shadow--2dp">
                            <div class="full-width panel-tittle bg-primary text-center tittles">
                                Nuevo usuario
                            </div>
                            <div class="full-width panel-content">
                                <form action="db/insertUser.php" method="post">
                                    <h5 class="text-condensedLight">Información usuario</h5>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="IDUser" name="userid">
                                        <label class="mdl-textfield__label" for="DNIClient">Cédula de ciudadanía</label>
                                        <span class="mdl-textfield__error">Número inválido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="User" name="username">
                                        <label class="mdl-textfield__label" for="NameClient">Usuario</label>
                                        <span class="mdl-textfield__error">Usuario inválido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$" id="PassUser" name="password">
                                        <label class="mdl-textfield__label" for="NameClient">Contraseña</label>
                                        <span class="mdl-textfield__error">Contraseña inválida</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameUser" name="name">
                                        <label class="mdl-textfield__label" for="NameClient">Nombre</label>
                                        <span class="mdl-textfield__error">Nombre inválido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameUser" name="lastname">
                                        <label class="mdl-textfield__label" for="LastNameClient">Apellido</label>
                                        <span class="mdl-textfield__error">Apellido inválido</span>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="RoleUser">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select class="mdl-textfield__input" name="role">
												<option value="" disabled="" selected="">Seleccione un rol</option>
												<option value="1" id="Admin">Administrador</option>
												<option value="2" id="General">General</option>
											</select>
                                        </div>
                                    </div>
                                    <p class="text-center">
                                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addClient">
											<i class="zmdi zmdi-plus"></i>
										</button>
                                        <div class="mdl-tooltip" for="btn-addClient">Guardar usuario</div>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mdl-tabs__panel" id="tabListClient">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                        <div class="full-width panel mdl-shadow--2dp">
                            <div class="full-width panel-tittle bg-success text-center tittles">
                                List Clients
                            </div>
                            <div class="full-width panel-content">
                                <form action="#">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                        <label class="mdl-button mdl-js-button mdl-button--icon" for="searchClient">
											<i class="zmdi zmdi-search"></i>
										</label>
                                        <div class="mdl-textfield__expandable-holder">
                                            <input class="mdl-textfield__input" type="text" id="searchClient">
                                            <label class="mdl-textfield__label"></label>
                                        </div>
                                    </div>
                                </form>
                                <div class="mdl-list">
                                <?php 
                                    $sql = "SELECT * FROM user";
                                    $result = $conn->query($sql);
                                    if ($row = mysqli_fetch_array($result)){
                                        do { 
                                ?>
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-face mdl-list__item-avatar"></i>
											<span><?php echo $row["username"]. " - " .$row["name"]?> </span>
                                        <span class="mdl-list__item-sub-title">Cédula de ciudadanía: <?php echo $row["userid"]?></span>
                                        <span class="mdl-list__item-sub-title">Rol: 
                                            <?php 
                                                if($row["userid"] == 1){
                                                    echo "Administrador";
                                                }else{
                                                    echo "General";
                                                }
                                            ?>
                                            </span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i></i>Eliminar</a>
                                    </div>
                                <?php
                                        } while ($row = mysqli_fetch_array($result)); 
                                    } 
                                ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>