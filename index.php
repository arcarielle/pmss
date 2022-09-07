<?php
    include_once 'components/head.inc.php';
?>
<body>
    <?php
        include_once 'components/header.inc.php';
    ?>
    <div class="landing">
            <div class="mask" style="background-color: rgba(0,0,0,0.3);">
                <div class="container vh-100">
                    <div class="col-md-12 d-flex flex-column justify-content-center align-items-start">
                        <div class="row">
                            <div class="col-12-md mt-5">
                                <h1 class="lh-base text-light">
                                    Bienvenido a Impulso Migrante<span><?php
                                        if(isset($_SESSION['userid'])){
                                            echo ", ".($_SESSION['username']);
                                        }
                                    ?>
                                    !</span>
                                </h1>
                                <h5 class="fw-lighter text-light">
                                    La Universidad Autónoma de Ciudad Juárez preocupada por la migración en nuestra ciudad, implementa un proyecto de servicio social, por medio del portal denominado IMPULSO MIGRANTE el cual es una iniciativa de bolsa de trabajo para los hermanos migrantes que buscan una oportunidad laboral en su estancia migratoria mientras resuelven su situación de asilo en los Estados Unidos de América. 
                                </h5>
                                <h5 class="fw-lighter text-light">
                                    En esta plataforma pueden encontrar una oferta de trabajo o bien cualquier empresa puede tener la oportunidad de promover sus ofertas laborales o personas físicas que requieran de algún apoyo semiprofesional. 
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 col-md-12 d-flex flex-column align-items-start bottom-0">
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
</body>
</html>