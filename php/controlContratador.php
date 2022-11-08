<?php
    include_once '../components/head.inc.php';
?>
<body>
    <?php
        include_once '../components/header.inc.php';
    ?>
    <div style="background-color: rgb(156, 0, 0)">
        <div class="container justify-content-center">
            <div class="row" >
                <div class="col-md-12 justify-content-start mb-2">
                    <!-- <h1 class="text-light mb-2 mt-4">Hola!</h1> -->
                    <?php
                        if(!isset($_GET["error"])){
                    ?>
                            <h1 class="text-light mb-2 mt-4">Hola!</h1>
                            <div class="col-md-12">
                                <p class="fs-4 text-light">Bienvenido al portal de administración.</p>
                            </div>
                    <?php
                        }
                        else{
                    ?>
                        <h1 class="text-light mb-2 mt-4">Error</h1>
                    
                    <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "stmtfailed"){
                                echo "<h2 class='fs-12 text-danger'>Algo salió mal</h2>";
                            }
                            else if($_GET["error"] == "pwdsdontmatch"){
                                echo "<h2 class='fs-12 text-danger'>Contraseñas no coinciden</h2>";
                            }
                            else if($_GET["error"] == "alrdyexists"){
                                echo "<h2 class='fs-12 text-danger'>Ya existe una cuenta con este correo</h2>";
                            }
                            else if($_GET["error"] == "eresMig"){
                                echo "<h2 class='fs-12 text-danger'>Iniciaste sesión con una cuenta tipo migrante, inicia sesión como empleador para agregar una oferta</h2>";
                            }
                            else if($_GET["error"] == "none"){
                                echo "<h2 class='fs-12 text-success'>Registro exitoso, inicia sesión volviendo al inicio</h2>";
                            }
                        }
                        }
                    ?>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card border border-danger shadow mb-4">
                        <div class="card-header text-danger bg-dark bg-opacity-10">
                            <i class="fa-solid fa-bell"></i> Notificaciones (<span id="notifs" class="text-danger">0</span>)
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-secondary">No tienes ninguna notificación nueva.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-3 mask bg-dark bg-opacity-50">
            <div class="container ">
                <h6 class="text-white mt-1 text-center">En esta sección puedes administrar tus puestos disponibles, mensajear con aplicantes y modificar tu información.</h6>                
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-dark p-1">
                <h4 class="text-light p-2 mt-1 ms-5 text-start">
                    Selecciona la acción que deseas realizar.
                </h4>
            </div>
        </div>
        <div class="col-md-12 border-top border-bottom">
            <nav class="nav nav-fill"><a name="administracion"></a>
                <a class="nav-link" onclick="añadirEmpleo()" href="#administracion"><i class="fa-solid fa-user-plus"></i> Añadir empleo</a>
                <a class="nav-link" onclick="modificarEmpleo()" href="#administracion"><i class="fa-solid fa-user-gear"></i> Modificar empleo</a>
                <!-- <a class="nav-link" onclick="eliminarEmpleo()" href="#administracion"><i class="fa-solid fa-user-minus"></i> Eliminar empleo</a> -->
                <!-- <a class="nav-link" onclick="mensajeria()" href="#administracion"><i class="fa-brands fa-rocketchat"></i> Mensajería</a> -->
                <a class="nav-link" onclick="miInformacionC()" href="#administracion"><i class="fa-solid fa-address-card"></i> Mi información</a>
            </nav>
        </div>
    </div>
    
    <div class="" id="controlAccion">
        <div class="container-fluid" id="añadirEmpleo" style="background-image: linear-gradient( 135deg, #FCCF31 10%, #F55555 100%);"></div>
        <div class="container-fluid" id="modificarEmpleo" style="background-image: linear-gradient( 135deg, #ABDCFF 10%, #0396FF 100%)"></div>
        <div class="container-fluid" id="eliminarEmpleo" style="background-image: linear-gradient( 135deg, #81FBB8 10%, #28C76F 100%);"></div>
        <!-- <div class="container-fluid" id="mensajeria"></div> -->
        <div class="container-fluid" id="miInformacionC" style="background-image: linear-gradient( 135deg, #81FBB8 10%, #28C76F 100%);"></div>
    </div>

    <?php
        include_once '../components/footer.inc.php';
    ?>
</body>
</html>