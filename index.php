<?php
    include_once 'components/head.inc.php';
?>
<body class="landing">
    <div class="modal fade" id="bienvenida">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light" id="exampleModalLabel"><i class="fa-solid fa-triangle-exclamation"></i> Importante !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fs-5">
                        Para poder hacer uso de las herramientas que te proveemos en esta página, necesitarás registrarte y así poder comunicarte
                        con quien lo necesites.
                    </p>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal"><i class="fa-solid fa-thumbs-up"></i> Entendido</button>
                </div>
            </div>
        </div>
    </div>

    <?php
        include_once 'components/header.inc.php';
    ?>
    <div>
        <div class="mask" style="background-color: rgba(0,0,0,0.3);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 bg-dark p-4 mt-3 border border-light shadow" style="--bs-bg-opacity: 0.75; --bs-border-opacity: 0.1;">
                        <h1 class="lh-base text-light">
                            Bienvenido a <span class="fst-italic">Impulso Migrante</span><span class=""><?php
                                if(isset($_SESSION['userid'])){
                                    echo ", ".($_SESSION['username']);
                                }
                            ?></span>
                            !
                        </h1>
                        <h5 class="fw-lighter text-light">
                            La Universidad Autónoma de Ciudad Juárez preocupada por la migración en 
                            nuestra ciudad, implementa un proyecto de servicio social, por medio del portal denominado 
                            <span class="text-success">IMPULSO MIGRANTE</span> el cual es una iniciativa de bolsa de trabajo para los hermanos migrantes que 
                            buscan una oportunidad laboral en su estancia migratoria mientras resuelven su situación de asilo 
                            en los Estados Unidos de América. 
                        </h5>
                        <h5 class="fw-lighter mt-2 text-light">
                            En esta plataforma pueden encontrar una oferta de trabajo o bien cualquier empresa puede tener la oportunidad de promover sus ofertas laborales o personas físicas que requieran de algún apoyo semiprofesional. 
                        </h5>
                    </div>
                    
                    <div class="col-md-auto">    
                        <div class="p-1 row">
                            <div class="d-grid gap-2 col-12-md p-1">
                                <button class="btn btn-outline-secondary border border-light border-opacity-50 border border-2 text-start text-light" type="button" onclick="location.href='/pmss/php/ofertasEmpleo.php'">Ver ofertas de empleo <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <div class="p-1 row">
                            <div class="d-grid gap-2 col-12-md p-1">
                                <button class="btn btn-outline-secondary border border-light border-opacity-50 border border-2 text-start text-light" type="button" onclick="location.href='/pmss/php/perfilesAplicantes.php'">Ver perfiles de migrantes <i class="fa-solid fa-arrow-right"></i></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 bg-dark p-4 mt-3 border border-light shadow m-1" style="--bs-bg-opacity: 0.75; --bs-border-opacity: 0.1;">
                        <h3 class="lh-base text-light">
                            <span class="fst-italic">Responsables</span>
                        </h3>
                        <h5 class="fw-lighter text-light">
                            La Universidad Autónoma de Ciudad Juárez construyó este proyecto liderado por Marco García y
                            Marco Rivas, estudiantes de la Licenciatura en Sistemas Computacionales, quienes desarrollaron este proyecto web
                            en su totalidad. Conoce más sobre ellos en sus enlaces.
                        </h5>


                        <div class="justify-content-center p-2">
                            <div class="row justify-content-center m-2">
                                <div class="col-md-6">
                                    <a class="" href="https://www.google.com">
                                        <img src="/pmss/assets/img/esau.jpg" style="height:180px;float:left;margin:5px;border:1px solid #ddd;border-radius:4px;">
                                        <h5 class="fw-lighter text-light">
                                            Marco Esau
                                        </h5>
                                    </a>
                                    <h5 class="fw-lighter text-light">
                                        Ing. Sistemas Computacionales 
                                    </h5>
                                </div>
                                <div class="col-md-6">    
                                    <a class="" href="https://www.google.com">
                                        <img src="/pmss/assets/img/marco.jpg" style="height:180px;float:left;margin:5px;border:1px solid #ddd;border-radius:4px;">
                                        <h5 class="fw-lighter text-light">
                                            Marco Rivas
                                        </h5>
                                    </a>
                                    <h5 class="fw-lighter text-light">
                                        Ing. Sistemas Computacionales
                                    </h5>
                                </div>
                            </div>
                        </div>    

                    </div>

                </div>

            </div>
        </div>
    </div>

    <?php
        include_once 'components/footer.inc.php';
    ?>

    <!-- <script>
        $(document).ready(function(){
            $("#bienvenida").modal('show');
        });
    </script> -->
    
    <script type="text/javascript">
        $(document).ready(function() {
            if ($.cookie('pop') == null) {
                $('#bienvenida').modal('show');
                $.cookie('pop', '1');
            }
        });
    </script>

</body>
</html>