<?php include('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/btnhandler.inc.php'); ?>

    <section class ="Description">
        <div class="flex-container " id="main_container">
            <div>
                <p id="text1">Hermanos Americanos es un proyecto que nace de la necesidad de ofrecerle trabajo 
                    a nuestros hermnaos latinoamericanos que se encuentran en calidad de migrantes en nuestra
                    ciudad fronteriza. Al no contar con documentos oficiales, es más complicado el conseguir 
                    trabajo, por lo que nos propusimos el diseñar y mantener una bolsa de trabajo a la que 
                    ellos puedan acceder para ofrecer su fuerza laboral y encontrar oportunidades de empleo.  
                </p>
            </div>

            <div class="contenedorBotones">

                <div class="botonesPrincipales"> 
                    <a class="nav-link active" aria-current="page" href="php/registro_empleado.php">
                        <h1>Busco trabajo, quiero registrarme</h1>
                    </a>	
                </div>

                <div class="botonesPrincipales"> 
                    <a class="nav-link active" aria-current="page" href="php/registro_empleador.php">
                        <h1>Busco contratar, quiero registrarme</h1>
                    </a>	
                </div>

                <div class="botonesPrincipales"> 
                    <a class="nav-link active" aria-current="page" href="php/ofertas.php">
                        <h1>Solo ver ofertas empleados</h1>
                    </a>	
                </div>

                <div class="botonesPrincipales"> 
                    <a class="nav-link active" aria-current="page" href="php/ofertas_empleadores.php">
                        <h1>Solo ver ofertas  empleadores</h1>
                    </a>	
                </div>

                <!-- <button onclick="show('signin')"> Prueba</button> -->

            </div>
        </div>
    </section>

<?php include('components/footer.inc.php'); ?>