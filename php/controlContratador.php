<?php
    include_once '../components/head.inc.php';
?>
<body>
    <?php
        include_once '../components/header.inc.php';
    ?>
    <div class="vh-100" >
        <div style="background-color: rgb(0, 98, 80)">
            <div class="container justify-content-center">
                <div class="row" >
                    <div class="col-md-12 justify-content-start">
                        <h1 class="text-light mb-5 mt-4">Hola !</h1>
                        <!--<span class="fw-light" id="namecont"></span>!-->
                    </div>
                    <div class="col-md-12">
                        <div class="card border border-danger shadow mb-4">
                            <div class="card-header text-danger bg-dark bg-opacity-10">
                                Notificaciones (<span id="notifs" class="text-danger">0</span>)
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-secondary">No tienes ninguna notificación nueva.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark p-3">
            <div class="container border border border-opacity-10" style="border-radius: 5px;">
                <h6 class="text-white mt-1 text-center">En esta sección puedes administrar tus puestos disponibles, mensajear con aplicantes y modificar tu información.</h3>                
            </div>
        </div>
        

        </div>
        <!-- <hr class="border border-secondary"> -->
    </div>
    


    <?php
        include_once '../components/footer.inc.php';
    ?>
</body>
</html>