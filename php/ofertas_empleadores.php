<?php include('../components/headreg.inc.php'); ?>
<body onload="hide('zoom')">
<div class=”container”>
	<?php include('../components/navbar.inc.php'); ?>
	<?php include('../components/btnhandler.inc.php'); ?>

        <div id="zoom" class="zoom" style="position:absolute;border:3px solid #73AD21;left: 20px;right:20px;background-color:#D1D1D1;z-index:1;font-size: 20px;">  
            <span id="span_muestra"></span>
            <button onclick="hide('zoom')" class="btn btn-primary">Cerrar</button>
        </div>

        <h2 style="text-align:center;margin:5px;"><a id="subs">Ofertas de Trabajo (Busco Trabajo)</h2>

		<nav class="navbar navbar-expand-lg" style="background-color: #D1D1D1; top:10px; 
			width:80%;margin: 5px auto;border: 2px outset gray;">
			<div class="container-fluid">
			<form method="post" action="ofertas_filtro_empleadores.php">
				<ul class="navbar-nav" style="align-content: center;margin: 5px auto; ">
				  
					<li><select class="form-select form-select-lg mb-3" name="oficio" method="post" action="ofertas_filtro_empleadores.php" required aria-label=".form-select-lg example" style="width:auto">
                        <option value="Oficio" selected>Oficio</option>
						<option value="Albanileria">Albañilería</option>
						<option value="Barberia">Barbería</option>
                        <option value="Carpinteria">Carpintería</option>
						<option value="Electricista">Electricista</option>
						<option value="Estilista">Estilista</option>
                        <option value="Herreria">Herrería</option>
						<option value="Limpieza">Limpieza</option>
						<option value="Mecanico">Mecánico</option>
						<option value="Obrero">Obrero</option>
                        <option value="Panadero">Panadero</option>
                        <option value="Plomeria">Plomería</option>
					  </select></li>
					  
					<li><select class="form-select form-select-lg mb-3" name="experiencia" method="post" action="ofertas_filtro_empleadores.php" required aria-label=".form-select-lg example" style="width:auto">
						<option value="Experiencia" selected>Experiencia</option>
						<option value="Menos de un anio">Menos de un año</option>
						<option value="Un anio o mas">Un año o más</option>
						<option value="Mas de tres anios">Más de tres años</option>
					  </select></li>

                      <li><button type="submit" class="btn btn-primary">Buscar</button></li>
				</ul>
			</form>
			</div>
		</nav>

		<div class="container" id="main_container">

			<?php 
			include('../components/dbconn.inc.php');

			$sql="SELECT emp.id, emp.Empresa, emp.Representante, emp.Correo, emp.Contra, emp.Telefono,
                emp.Direccion, emp.Descripcion, trab.Oficio as 'Oficio', trab.Experiencia as 'Experiencia', 
                trab.Descripcion as 'DescripcionTrab', trab.id_main as 'TrabId' 
                FROM `empleadores` emp, `trabajos_empleadores` trab 
                WHERE emp.id = trab.id;";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
                    $x = rand(1,6);

			?>
					
				<div class="elem" id="<?php echo $row["TrabId"];?>" onclick="show_zoom()">
					<p class="<?php echo $row["TrabId"];?>">
						<span id="id" class="<?php echo $row["TrabId"];?>">Id: <?php echo $row["TrabId"];?> </span>
						</br><span class="<?php echo $row["TrabId"];?>">Empresa: <?php echo $row["Empresa"];?></span>
						</br><span class="<?php echo $row["TrabId"];?>">Oficio: <?php echo $row["Oficio"];?></span>
						</br><span class="<?php echo $row["TrabId"];?>">Experiencia: <?php echo $row["Experiencia"];?></span>
						</br><span class="<?php echo $row["TrabId"];?>">Descripcion Trabajo: <?php echo $row["DescripcionTrab"];?></span>
						</br><span class="<?php echo $row["TrabId"];?>">Telefono: <?php echo $row["Telefono"];?></span>
						</br><span class="<?php echo $row["TrabId"];?>">Representante: <?php echo $row["Representante"];?></span>
						</br><span class="<?php echo $row["TrabId"];?>">Correo: <?php echo $row["Correo"];?></span>
						</br><span class="<?php echo $row["TrabId"];?>">Direccion: <?php echo $row["Direccion"];?></span>
						</br><span class="<?php echo $row["TrabId"];?>">Descripcion: <?php echo $row["Descripcion"];?></span>
					</p>
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

		<?php include('../components/footer.inc.php'); ?>