<?php  
session_start();  
  
?>

<?php include('../components/headreg.inc.php'); ?>

<body>
	<?php include('../components/navbar.inc.php'); ?>

	<?php
            require('../components/dbconn.inc.php');
			
			$check_user="SELECT * FROM `empleadores` WHERE Correo ='{$_SESSION['email']}'";

            $result = $conn->query($check_user);

			if ($result->num_rows > 0) {

				// while($row = $result->fetch_assoc()) {

					$row = $result->fetch_assoc();

						$users_id = $row['id'];
						$users_empre = $row['Empresa'];
						$users_nom = $row['Representante'];
						$users_correo = $row['Correo'];
						$users_contra = $row['Contra'];
						$users_tele = $row['Telefono'];
						$users_dire = $row['Direccion'];
						$users_descrip = $row['Descripcion'];
			?>
				<div class="g-col-6">
					<form class="row g-3" action="actualizar_empleador.php" method="post">

						<div class="col-md-8">
							<label for="validationDefault01" class="form-label">Nombre de Empresa o Contratante</label>
							<input type="text" name="empresa" value="<?php echo $users_empre; ?>"
								class="form-control" id="validationDefault01" value="Nombre de Empresa" required>
						</div>

						<div class="col-md-4">
							<label for="validationDefault011" class="form-label">Nombre de Representante</label>
							<input type="text" name="nombre" value="<?php echo $users_nom; ?>"
								class="form-control" id="validationDefault011" value="Representante" required>
						</div>
		
						<div class="col-md-7">
							<label for="validationDefaultUsername" class="form-label">Correo Electrónico</label>
							<input type="email" name="correo" value="<?php echo $users_correo; ?>"
								class="form-control" id="validationDefaultUsername" required>
						</div>
		
						<div class="col-md-4">
							<label class="form-label" for="autoSizingInputGroup">Telefono</label>
							<div class="input-group">
							  <div class="input-group-text">+52</div>
							  <input type="text" name="telefono" value="<?php echo $users_tele; ?>"
							  	class="form-control" id="autoSizingInputGroup" maxlength="10" placeholder="123-456-7891">
							</div>
						</div>
		
						<div class="col-md-7">
							<label for="validationDefault03" class="form-label">Contraseña</label>
							<input type="password" name="password" value="<?php echo $users_contra; ?>"
							class="form-control" id="validationDefault03" aria-describedby="passwordHelpBlock" required>
							<div id="passwordHelpBlock" class="form-text">
									Considere una contraseña segura, con números, mayúsculas y al menos un caracter especial
							</div> 
						</div>
						<div class="col-10">
							<label for="validationDefault04" class="form-label">Dirección</label>
							<input type="text" name="direccion" value="<?php echo $users_dire; ?>" 
								class="form-control" id="validationDefault04" placeholder="Av. del Charro" required>
						</div>

						<div class="col-md-9">
							<label for="textareadescrip" class="form-label">Descripción de Empresa</label>
							<textarea class="form-control" name="descripcion" value="<?php echo $users_descrip; ?>" 
								aria-label="With textarea" id="textareadescrip" required>
								<?php echo $users_descrip; ?>
							</textarea>
						  </div>
		
						<div class="col-12">
							<button type="submit" class="btn btn-primary">Actualizar</button>
						</div>
					</form>
				</div>
						
			<?php
			}
			else {
				echo "<h2 style='width:auto;'>No hay una cuenta tipo Empleador iniciada</h2>";
			}
			
			require('../components/dbconn.inc.php');

			$sql="SELECT * FROM trabajos_empleadores WHERE id ='{$users_id}'";

            $result = $conn->query($sql);

			if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {
						$users_id_main = $row['id_main'];
						$users_ofi = $row['Oficio'];
						$users_exp = $row['Experiencia'];
						$users_descrip_trab = $row['Descripcion'];
			?>
			<h2 style="text-align:center;width: 50%;"><a id="subs">Proyecto</h2>
				<div class="g-col-6">
					<form class="row g-3" action="actualizar_proyecto_empleador.php" method="post">

						<div class="col-md-3">
							<label for="validationDefault01" class="form-label">Id Proyecto</label>
							<input type="text" name="id" value="<?php echo $users_id_main; ?>"
								class="form-control" id="validationDefault01" readonly>
						</div>
					
						<div class="col-md-3">
							<label for="validationDefault02" class="form-label">Oficio</label>
							<select id="validationDefault02" name="oficio" class="form-select" required>
								<option value="<?php echo $users_ofi; ?>" selected> <?php echo $users_ofi; ?></option>
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
							</select>
						</div>

						<div class="col-md-3">
							<label for="validationDefault03" class="form-label">Experiencia</label>
							<select id="validationDefault03" name="experiencia" class="form-select" required>
								<option value="Experiencia" selected>Experiencia</option>
								<option value="Menos de un anio">Menos de un año</option>
								<option value="Un anio o mas">Un año o más</option>
								<option value="Mas de tres anios">Más de tres años</option>
							</select>
						</div>
		
						<div class="col-md-9">
							<label for="textareadescrip" class="form-label">Descripción de  Trabajo</label>
							<textarea class="form-control" name="descripcion" value="<?php echo $users_descrip_trab; ?>" 
								aria-label="With textarea" id="textareadescrip" required>
								<?php echo $users_descrip_trab; ?>
							</textarea>
						</div>

						<div class="col-12">
							<button type="submit" class="btn btn-primary">Actualizar</button>
						</div>
						
					</form>
				</div>
		
			<?php
			}}
			else {
				echo "<h2 style='width:auto;'>No hay proyectos</h2>";
			}
			$conn->close();
			?>

				<button class="btn btn-primary">
					<a class="nav-link" href="/pmss/index.php">Inicio</a>
                </button>
	<?php include('../components/footer.inc.php'); ?>
	</body>
</html>