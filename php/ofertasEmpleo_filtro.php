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
                    <div class="col-md-12 justify-content-start mb-5">
                        <h1 class="text-light mb-2 mt-5">Ofertas de empleo</h1>
                        <div class="col-md-12">
                            <p class="fs-4 text-light">En esta sección puedes buscar diferentes empleos que se ajusten a tu experiencia o necesidad.</p>
                        </div>
                    </div>

                    <div class="col-md-12 my-5">
                        <section>
                            <div class="input-group p-3 mask bg-white bg-opacity-25"> 
                                <input type="text" class="form-control fs-5" placeholder="Busca por un trabajo en particular . . ." aria-label="Busqueda" aria-describedby="busquedaempleo">
                                <div class="input-group-append mx-2 px-2"> 
                                    <button class="btn btn-outline-light p-3 fs-5" type="button"><i class="fa-solid fa-magnifying-glass"></i> &nbspBuscar &nbsp</button>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>

        <nav class="navbar navbar-expand-lg" style="width:80%;margin:5px auto;border:2px outset gray;">
			<div class="container-fluid">
			<form method="post" action="ofertasEmpleo_filtro.php">
				<ul class="navbar-nav" style="align-content: center;margin: 5px auto; ">
				  
					<li style="margin: 5px;">
                        <select class="form-select form-select-lg mb-3" name="oficio" method="post" action="ofertas_filtro.php" required aria-label=".form-select-lg example" style="width:auto">                                        
                            <option selected value="Cualquiera">Cualquiera</option>
                            <option value="Albañilería">Albañilería</option>
                            <option value="Recepcionista">Recepcionista</option>
                            <option value="Barbería">Barbería</option>
                            <option value="Plomería">Plomería</option>
                            <option value="Electricista">Electricista</option>
                            <option value="Mecánica">Mecánica</option>
                            <option value="Limpieza">Limpieza</option>
                            <option value="Herrería">Herrería</option>
                            <option value="Carpintería">Carpintería</option>
                        </select>
                    </li>

					  <li style="margin: 5px;">
                        <select class="form-select form-select-lg mb-3" name="experiencia" method="post" action="ofertas_filtro.php" required aria-label=".form-select-lg example" style="width:auto">
                                <option selected value="Cualquiera">Cualquiera</option>
                                <option value="Sin importar">Sin importar</option>
                                <option value="1 año o menos">1 año o menos</option>
                                <option value="1 a 2 años">1 a 2 años</option>
                                <option value="2 a 5 años">2 a 5 años</option>
                                <option value="5 años o más">5 años o más</option>
                            </select>
                    </li>

                      <li style="margin: 5px;"><button type="submit" class="btn btn-primary">Buscar</button></li>
				</ul>
			</form>
			</div>
		</nav>

            <div class="container-fluid p-3 mask bg-dark bg-opacity-50 rounded-3">
                <div class="container">
                    <h6 class="text-white mt-1 text-center">Usa la barra de búsqueda para facilitar el encontrar un empleo adecuado para ti.</h6>                
                </div>
            </div>
        </div>

            <div class="container px-4 py-5" id="custom-cards">
                <h1 class="pb-2 border-bottom fw-light text-dark">Lista de Empleos </h1>

                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5" id="contenedor_cards">
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
                        
                        <h6 class="card-title">Sueldo</h6>
                        <p class="card-text"><?php echo $row["sueldo"];?></p>
                        
                        <h6 class="card-title">Teléfono</h6>
                        <p class="card-text"><?php echo $row["Telefono"];?></p>
                        
                        <h6 class="card-title">Domicilio</h6>
                        <p class="card-text"><?php echo $row["Direccion"];?></p>

                    </div>
                    <div class="card-body">
                        <form action="/pmss/php/desplegarEmpleador.php" method="post">
                            <button type="submit" name="ver_mas" value="<?php echo $row["id_proyecto"];?>" class="btn btn-primary float-end">Ver mas</button>
                        </form>
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