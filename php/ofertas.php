<?php include('../components/headreg.inc.php'); ?>

<body onload="hide('zoom')">

	<div class=”container”>

	<?php include('../components/navbar.inc.php'); ?>
	<?php include('../components/btnhandler.inc.php'); ?>

        <div id="zoom" class="zoom">
            <span id="span_muestra"></span>
            <button onclick="hide('zoom')" class="btn btn-primary">Cerrar</button>
        </div>

        <h2 style="text-align:center;margin:5px;"><a id="subs">Ofertas para Empresas (Busco Contratar)</h2>

		<nav class="navbar navbar-expand-lg" style="background-color: #D1D1D1; top:10px; 
			width:80%;margin: 5px auto;border: 2px outset gray;">
			<div class="container-fluid">
			<form method="post" action="ofertas_filtro.php">
				<ul class="navbar-nav" style="align-content: center;margin: 5px auto; ">
				  
					<li><select class="form-select form-select-lg mb-3" name="oficio" method="post" action="ofertas_filtro.php" required aria-label=".form-select-lg example" style="width:auto">
                        <option value="Oficio" selected>Oficio</option>
						<option value="Albanileria">Albañilería</option>
						<option value="Barbero">Barbería</option>
                        <option value="Carpinteria">Carpintería</option>
						<option value="Electricista">Electricista</option>
						<option value="Estilista">Estilista</option>
                        <option value="Herrero">Herrería</option>
						<option value="Limpieza">Limpieza</option>
						<option value="Mecanico">Mecánico</option>
						<option value="Obrero">Obrero</option>
                        <option value="Panadero">Panadero</option>
                        <option value="Plomeria">Plomería</option>
					  </select></li>

					  <li><select class="form-select form-select-lg mb-3" name="experiencia" method="post" action="ofertas_filtro.php" required aria-label=".form-select-lg example" style="width:auto">
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

			<?php include('../components/dbconn.inc.php');
			
			$sql = "SELECT * FROM empleados";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {

                    $x= rand(1, 6);
			?>

				<div class="elem" id="<?php echo $row["id"];?>" onclick="show_zoom()">
					<p class="<?php echo $row["id"];?>">
						<img class="<?php echo $row["id"];?>" src='/pmss/assets/img/php/pere<?php echo $x;?>.JPG'/> 
						<span id="id" class="<?php echo $row["id"];?>">Id: <?php echo $row["id"];?> </span>
						</br><span class="<?php echo $row["id"];?>">Nombre: <?php echo $row["Nombre"];?></span>
						</br><span class="<?php echo $row["id"];?>">Apellido: <?php echo $row["Apellido"];?></span>
						</br><span class="<?php echo $row["id"];?>">Oficio: <?php echo $row["Oficio"];?></span>
						</br><span class="<?php echo $row["id"];?>">Experiencia: <?php echo $row["Experiencia"];?></span>
						</br><span class="<?php echo $row["id"];?>">Correo: <?php echo $row["Correo"];?></span>
						</br><span class="<?php echo $row["id"];?>">Contra: <?php echo $row["Contra"];?></span>
						</br><span class="<?php echo $row["id"];?>">Telefono: <?php echo $row["Telefono"];?></span>
						</br><span class="<?php echo $row["id"];?>">Direccion: <?php echo $row["Direccion"];?></span>
						</br><span class="<?php echo $row["id"];?>">Sexo: <?php echo $row["Sexo"];?></span>
						</br><span class="<?php echo $row["id"];?>">Descripcion: <?php echo $row["Descripcion"];?></span>
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