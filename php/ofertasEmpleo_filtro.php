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
                        <h1 class="text-light mb-2 mt-2">Ofertas de empleo</h1>
                        <div class="col-md-12">
                            <p class="fs-4 text-light">En esta sección puedes buscar diferentes empleos que se ajusten a tu experiencia o necesidad.</p>
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <section>
                            <div class="input-group p-2 mask bg-white bg-opacity-25"> 
                                <input type="text" class="form-control fs-5 m-1" placeholder="Busca por un trabajo en particular . . ." aria-label="Busqueda" aria-describedby="busquedaempleo">
                                <div class="input-group-append mx-2 px-2"> 
                                    <button class="btn btn-outline-light p-2 mt-1 fs-5" type="button">&nbspBuscar &nbsp <i class="fa-solid fa-magnifying-glass"></i>&nbsp</button>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="container-fluid justify-content-center">
                        <nav class="navbar navbar-expand-lg" >
                            <form method="post" action="ofertasEmpleo_filtro.php">
                                <ul class="navbar-nav">
                                    <li>
                                        <select class="form-select form-select-lg mb-3 me-3" name="oficio" method="post" action="ofertas_filtro.php" style="width:80%;margin:5px;">                                        
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
                                        <select class="form-select form-select-lg mb-3 me-3" name="experiencia" method="post" action="ofertas_filtro.php" style="width:auto;margin:5px;">
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

        <div class="container px-4 py-5" id="custom-cards">
            <h1 class="border-bottom fw-light text-dark">Lista de Empleos </h1>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 align-items-stretch g-4 py-5" id="contenedor_cards">
            <?php

                    require_once '../assets/includes/dbh.inc.php';
                    require_once '../assets/includes/functions.inc.php';

                    $users_of = $_POST['oficio'];
                    $users_exp = $_POST['experiencia'];

                    if($users_of != 'Cualquiera' && $users_exp != 'Cualquiera'){

                        $sql="SELECT pro.id_proyecto, pro.oficio, pro.experiencia, pro.hora1, pro.hora2, 
                        pro.tipo, pro.sueldo,  
                        emp.empresa as 'Empresa', emp.direccion as 'Direccion', emp.telefono as 'Telefono'  
                        FROM `proyectos_empleadores` pro, `empleadores` emp 
                        WHERE pro.id_empresa = emp.id_emp AND pro.oficio='{$users_of}' and pro.experiencia = '{$users_exp}';";

                    }
                    elseif($users_of != 'Cualquiera'){
                    
                        $sql="SELECT pro.id_proyecto, pro.oficio, pro.experiencia, pro.hora1, pro.hora2, 
                        pro.tipo, pro.sueldo,  
                        emp.empresa as 'Empresa', emp.direccion as 'Direccion', emp.telefono as 'Telefono'  
                        FROM `proyectos_empleadores` pro, `empleadores` emp 
                        WHERE pro.id_empresa = emp.id_emp AND pro.oficio='{$users_of}';";

                    }
                    elseif($users_exp != 'Cualquiera'){                        
                        $sql="SELECT pro.id_proyecto, pro.oficio, pro.experiencia, pro.hora1, pro.hora2, 
                        pro.tipo, pro.sueldo,  
                        emp.empresa as 'Empresa', emp.direccion as 'Direccion', emp.telefono as 'Telefono'  
                        FROM `proyectos_empleadores` pro, `empleadores` emp 
                        WHERE pro.id_empresa = emp.id_emp AND pro.experiencia = '{$users_exp}';";
                    }
                    else{
                        $sql="SELECT pro.id_proyecto, pro.oficio, pro.experiencia, pro.hora1, pro.hora2, 
                        pro.tipo, pro.sueldo,  
                        emp.empresa as 'Empresa', emp.direccion as 'Direccion', emp.telefono as 'Telefono'  
                        FROM `proyectos_empleadores` pro, `empleadores` emp 
                        WHERE pro.id_empresa = emp.id_emp;";
                    }

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            
                    ?>

                    <div class="card" style="width: 18rem;margin:10px;">
                    <div class="card-body">
                        
                        <h5 class="card-title"><?php echo $row["Empresa"];?></h5>

                        <h6 class="card-title"><?php echo $row["oficio"];?></h6>
                        <p class="card-text">Experiencia: <?php echo $row["experiencia"];?></p>

                        <h6 class="card-title">Horario</h6>
                        <p class="card-text">De <?php echo $row["hora1"];?> a <?php echo $row["hora2"];?></p>
                        
                        <h6 class="card-title">Tipo de Contrato</h6>
                        <p class="card-text"><?php echo $row["tipo"];?></p>
                        
                        <h6 class="card-title">Sueldo o Paga según Contrato</h6>
                        <p class="card-text"><?php echo $row["sueldo"];?></p>
                        
                        <h6 class="card-title">Teléfono</h6>
                        <p class="card-text"><?php echo $row["Telefono"];?></p>
                        
                        <h6 class="card-title">Domicilio</h6>
                        <p class="card-text"><?php echo $row["Direccion"];?></p>

                    </div>
                    <div class="card-body">
                        <form action="/pmss/php/desplegarEmpleador.php" method="post">
                            <button type="submit" name="ver_mas" value="<?php echo $row["id_proyecto"];?>" class="btn btn-primary float-end">Ver más</button>
                        </form>
                    </div>
                    </div>

                    <?php
                    }
                    }
                    else {
                    echo "No hay resultados que coincidan con tu búsqueda";
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