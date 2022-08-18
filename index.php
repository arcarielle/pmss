<?php
    include_once 'components/head.inc.php';
?>
<body>
    <?php
        include_once 'components/header.inc.php';
    ?>
    <div class="landing">
            <div class="mask" style="background-color: rgba(0,0,0,0.67);">
                <div class="container vh-100">
                    <div class="container d-flex flex-column justify-content-center align-items-start">
                        <div class="row">
                            <div class="col-12 mt-5">
                                <h1 class="lh-base text-light">Bienvenido a Impulso Migrante !</h1>
                                <h4 class="fw-lighter text-light">
                                    La Universidad Autónoma de Ciudad Juárez preocupada por la migración en nuestra ciudad, implementa un proyecto de servicio social, por medio del portal denominado IMPULSO MIGRANTE el cual es una iniciativa de bolsa de trabajo para los hermanos migrantes que buscan una oportunidad laboral en su estancia migratoria mientras resuelven su situación de asilo en los Estados Unidos de América. 
                                </h4>
                                <h4 class="fw-lighter text-light">
                                    En esta plataforma pueden encontrar una oferta de trabajo o bien cualquier empresa puede tener la oportunidad de promover sus ofertas laborales o personas físicas que requieran de algún apoyo semiprofesional. 
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex flex-column align-items-start position-absolute bottom-0">
                        <div class="p-1 row">
                            <div class="d-grid gap-2 col-12">
                                <button class="btn btn-outline-secondary border border-light border-opacity-50 border border-2 text-start text-light" type="button" onclick="location.href='/pmss/php/controlAplicante.php'">Solo quiero ver ofertas de empleo ></button>
                            </div>
                        </div>
                        <div class="p-1 row">
                            <div class="d-grid gap-2 col-12">
                                <button class="btn btn-outline-secondary border border-light border-opacity-50 border border-2 text-start text-light" type="button" onclick="location.href='/pmss/php/controlContratador.php'">Solo quiero ver perfiles de personas buscando empleo ></button>
                            </div>
                        </div>
                        <div class="p-1 row">
                            <div class="d-grid gap-2 col-12">
                                <button class="btn btn-outline-secondary border border-light border-opacity-50 border border-2 text-start text-light" type="button" onclick="location.href='/pmss/php/registroAplicante.php'">Quiero registrarme para aplicar a ofertas de empleo ></button>
                            </div>
                        </div>
                        <div class="p-1 row">
                            <div class="d-grid gap-2 col-12">
                                <button class="btn btn-outline-secondary border border-light border-opacity-50 border border-2 text-start text-light" type="button" onclick="location.href='/pmss/php/registroContratador.php'">Quiero registrar mi empresa para publicar puestos y/o contratar empleados ></button>
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