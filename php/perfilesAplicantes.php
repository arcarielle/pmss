<?php
    include_once '../components/head.inc.php';
?>
<body>
    <?php
        include_once '../components/header.inc.php';
    ?>
    <div class="">
        <div style="background-color: rgb(32,132,84)">
            <div class="container justify-content-center">
                <div class="row" >
                    <div class="col-md-12 justify-content-start">
                        <h1 class="text-light mb-2 mt-2">Perfiles de aplicantes</h1>
                        <div class="col-md-12">
                            <p class="fs-4 text-light">En esta sección puedes buscar los distintos aplicantes para poder contactar con ellos.</p>
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <section>
                            <div class="input-group p-2 mask bg-white bg-opacity-25"> 
                                <input type="text" class="form-control fs-5 m-1" placeholder="Busca por el oficio deseado . . ." aria-label="Busqueda" aria-describedby="busquedaempleo">
                                <div class="input-group-append mx-2 px-2"> 
                                    <button class="btn btn-outline-light p-3 fs-5" type="button"><i class="fa-solid fa-magnifying-glass"></i> &nbspBuscar &nbsp</button>
                                </div>
                            </div>
                        </section>
                    </div>

                    
                    <div class="container-fluid justify-content-center">
                    <nav class="navbar navbar-expand-lg">
                        <form method="post" action="perfilesAplicantes_filtro.php"> 
                            <ul class="navbar-nav">
                                <li>
                                    <select class="form-select form-select-lg mb-3" name="oficio" method="post" action="ofertas_filtro.php" style="width:80%;margin:5px;">                                        
                                        <option selected value="Cualquiera">Tipo de Empleo</option>
                                        <optgroup label="Oficios">
                                            <option value="Albañilería">Albañilería</option>
                                            <option value="Barbería">Barbería</option>
                                            <option value="Carpintería">Carpintería</option>
                                            <option value="Cocina">Cocina</option>
                                            <option value="Electricista">Electricista</option>
                                            <option value="Herrería">Herrería</option>
                                            <option value="Limpieza">Limpieza</option>
                                            <option value="Mecánica">Mecánica</option>
                                            <option value="Panadería">Panadería</option>
                                            <option value="Plomería">Plomería</option>
                                        </optgroup>
                                        <optgroup label="Licencias Técnicas">
                                            <option value="Técnico en Administración de Empresas">Técnico en Administración de Empresas</option>
                                            <option value="Técnico en Computación e Informática">Técnico en Computación e Informática</option>
                                            <option value="Técnico en Diseño Gráfico">Técnico en Diseño Gráfico</option>
                                            <option value="Técnico en Electrónica Insutrial">Técnico en Electrónica Insutrial</option>
                                            <option value="Técnico en Marketing">Técnico en Marketing</option>
                                            <option value="Técnico en Mecatrónica">Técnico en Mecatrónica</option>
                                            <option value="Técnico en Negocios Internacionales">Técnico en Negocios Internacionales</option>

                                        </optgroup>
                                        <optgroup label="Profesiones">
                                            <optgroup label="Ingenierías">
                                                <option value="Ing. Aeronáutica">Ing. Aeronáutica</option>
                                                <option value="Ing. Agrónomo">Ing. Agrónomo</option>
                                                <option value="Ing. Civil">Ing. Civil</option>
                                                <option value="Ing. Eléctrica">Ing. Eléctrica</option>
                                                <option value="Ing. Electrónica">Ing. Electrónica</option>
                                                <option value="Ing. Informática">Ing. Informática</option>
                                                <option value="Ing. Mecatrónica">Ing. Mecatrónica</option>
                                                <option value="Ing. Sistemas">Ing. Sistemas</option>
                                            </optgroup>
                                            <optgroup label="Licenciaturas">
                                                <option value="Lic. Administración de Empresas">Lic. Administración de Empresas</option>
                                                <option value="Lic. Comunicación">Lic. Comunicación</option>
                                                <option value="Lic. Criminología">Lic. Criminología</option>
                                                <option value="Lic. Economía">Lic. Economía</option>
                                                <option value="Lic. Educación">Lic. Educación</option>
                                                <option value="Lic. Finanazas">Lic. Finanazas</option>
                                                <option value="Lic. Médico General">Lic. Médico General</option>
                                                <option value="Lic. Turismo">Lic. Turismo</option>
                                            </optgroup> 
                                        </optgroup>
                                </select>
                                </li>

                                <li>
                                    <select class="form-select form-select-lg mb-3" name="experiencia" method="post" action="ofertas_filtro.php" style="width:auto;margin:5px;">
                                            <option selected value="Cualquiera">Experiencia</option>
                                            <option value="Sin importar">Sin importar</option>
                                            <option value="1 año o menos">1 año o menos</option>
                                            <option value="1 a 2 años">1 a 2 años</option>
                                            <option value="2 a 5 años">2 a 5 años</option>
                                            <option value="5 años o más">5 años o más</option>
                                    </select>
                                </li>

                                <li>
                                    <button type="submit" class="btn btn-primary mt-2">Buscar</button>
                                </li>
                            </ul>
                        </form>
                    </nav>
                </div>
            </div>
        </div>
    </div>

            <div class="container px-4 py-4" id="custom-cards">
                <h1 class="border-bottom text-dark">Lista de Aplicantes </h1>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 align-items-stretch g-4 py-5" id="contenedor_cards">
                    <?php

                        require_once '../assets/includes/dbh.inc.php';
                        require_once '../assets/includes/functions.inc.php';

                        $sql = "SELECT * FROM migrantes";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                
                        $str = $row["descripcion"];
                        if (strlen($str) > 177) {
                            $str = substr($str,0,178).'...';
                        }

                    ?>

                    <div class="card" style="col-md-auto margin:5px;">
                        <div class="card-body">
                            
                        <?php
                            if($row["dir_perfil"]!==""){
                        ?>
                            
                            <img src="/pmss/assets/includes/<?php echo $row["dir_perfil"];?>" alt="Smiley face" height="120px" style="float:right;border:1px solid #ddd;border-radius:4px;padding:5px;margin:2px;">

                        <?php
                            }
                        ?>

                            <h5 class="card-title"><?php echo $row["nombre"];?></h5>
                            <p class="card-text"><?php echo $str;?></p>
                        
                            <h6 class="card-title"><?php echo $row["oficio1"];?></h6>
                            <p class="card-text">Experiencia: <?php echo $row["oficio1_exp"];?></p>

                    <?php
                        if($row["oficio2"]!==""){
                    ?>
                        <h6 class="card-title"><?php echo $row["oficio2"];?></h6>
                        <p class="card-text">Experiencia: <?php echo $row["oficio2_exp"];?></p>

                    <?php
                        }
                    ?>

                            <h6 class="card-title">Español</h6>
                            <p class="card-text"><?php echo $row["lengua"];?></p>
                            
                            <h6 class="card-title">Teléfono</h6>
                            <p class="card-text"><?php echo $row["telefono"];?></p>
                            
                            <h6 class="card-title">Domicilio</h6>
                            <p class="card-text"><?php echo $row["domicilio"];?></p>
                        </div>
                        <div class="card-body">
                            <form action="/pmss/php/desplegarMigrante.php" method="post">
                                <button type="submit" name="ver_mas" value="<?php echo $row["id_mig"];?>" class="btn btn-primary float-end">Ver más</button>
                            </form>
                            <!-- <a href="#" class="card-link">Más Información</a> -->
                            <!-- <a href="#" class="card-link">Another link</a> -->
                        </div>
                    </div>

                    <?php
                        }
                    }
                    else {
                        echo "0 users";
                    }
        
                    $conn->close();
                    ?>
                    
                </div>
            </div>
        
        
    </div>

    <?php
        include_once '../components/footer.inc.php';
    ?>
</body>
</html>