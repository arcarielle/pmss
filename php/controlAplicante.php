<?php
    include_once '../components/head.inc.php';
?>
<body>
    <?php
        include_once '../components/header.inc.php';
    ?>
    <div style="background-color: rgb(33, 93, 110)">
        <div class="container justify-content-center">
            <div class="row" >
                <div class="col-md-12 justify-content-start mb-5">
                    <h1 class="text-light mb-2 mt-4">Hola!</h1>
                    <div class="col-md-12">
                        <p class="fs-4 text-light">Bienvenido al portal de administración.</p>
                    </div>
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
                <h6 class="text-white mt-1 text-center">En esta sección puedes buscar empleo, mensajear con contratadores y modificar tu información.</h6>                
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
                <a class="nav-link" aria-current="page" href="/pmss/php/ofertasEmpleo.php"><i class="fa-solid fa-magnifying-glass"></i> Buscar empleos</a>
                <a class="nav-link" onclick="mensajeria()" href="#administracion"><i class="fa-brands fa-rocketchat"></i> Mensajería</a>
                <a class="nav-link" onclick="miInformacionA()" href="#administracion"><i class="fa-solid fa-address-card"></i> Mi información</a>
            </nav>
        </div>
    </div>
    <div class="">
    <div class="container-fluid" id="mensajeria"></div>
    <div class="container-fluid" id="miInformacionA" style="background-image: linear-gradient( 135deg, #81FBB8 10%, #28C76F 100%);"></div>
    </div>
    <?php
        include_once '../components/footer.inc.php';
    ?>
</body>
</html>