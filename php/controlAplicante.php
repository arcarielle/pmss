<?php
    include_once '../components/head.inc.php';
?>
<body>
    <?php
        include_once '../components/header.inc.php';
    ?>
        <div style="background-color: rgb(0, 98, 80)">
            <div class="container justify-content-center">
                <div class="row" >
                    <div class="col-md-12 justify-content-start">
                        <h1 class="text-light mb-2 mt-4">Hola !</h1>
                        <div class="col-md-12">
                            <p class="fs-5 text-light">En esta sección puedes administrar tus puestos disponibles, mensajear con aplicantes y modificar tu información.</p>
                        </div>
                        <!--<span class="fw-light" id="namecont"></span>!-->
                    </div>
                    <div class="col-md-12">
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
        </div>

        <div class="container-fluid p-1 bg-light">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="text-secondary p-1 mt-1 ms-5 text-start">
                        Selecciona la acción que deseas realizar.
                    </h6>
                </div>
                <div class="col-md-12 border-top border-bottom">
                    <nav class="nav nav-fill">
                        <a class="nav-link" aria-current="page" href="#"><i class="fa-solid fa-user-plus"></i> Añadir empleo</a>
                        <a class="nav-link" href="#"><i class="fa-solid fa-user-gear"></i> Modificar empleo</a>
                        <a class="nav-link" href="#"><i class="fa-solid fa-user-minus"></i> Eliminar empleo</a>
                        <a class="nav-link" href="#"><i class="fa-brands fa-rocketchat"></i> Mensajería</a>
                        <a class="nav-link" href="#"><i class="fa-solid fa-address-card"></i> Mi información</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark ps-4 pe-4">
            <div class="vh-100 container-fluid bg-white">

            </div>
        </div>
        
        <!-- <hr class="border border-secondary"> -->
    </div>
    


    <?php
        include_once '../components/footer.inc.php';
    ?>
</body>
</html>