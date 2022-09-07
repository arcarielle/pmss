<?php
    include_once 'components/head.inc.php';
?>
<body>
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
    <div class="landing">
            <div class="mask" style="background-color: rgba(0,0,0,0.3);">
                <div class="container vh-100">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-column justify-content-center align-items-start bg-dark p-4 mt-3 border border-light shadow" style="--bs-bg-opacity: 0.75; --bs-border-opacity: 0.1;">
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
                    </div>
                    <div class="mt-5 col-md-12 d-flex flex-column align-items-start bottom-0">
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