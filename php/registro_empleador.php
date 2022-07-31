<?php include('../components/headreg.inc.php'); ?>

<body>
	<?php include('../components/navbar.inc.php'); ?>
	<?php include('../components/btnhandler.inc.php'); ?>

		<div class="grid" style="--bs-gap: .25rem 1rem;--bs-columns:12;">
		
			<h2 style="text-align:center;"><a id="subs">Suscripción de Empleador (Ofrecer Trabajo)</h2>

				<div class="g-col-6">
					<form class="row g-3" action="/pmss/php/registro_empleador.php" method="post">

						<div class="col-md-8">
							<label for="validationDefault01" class="form-label">Nombre de Empresa o Contratante</label>
							<input type="text" name="empresa" class="form-control" id="validationDefault01" value="Nombre de Empresa" required>
						</div>

						<div class="col-md-4">
							<label for="validationDefault011" class="form-label">Nombre de Representante</label>
							<input type="text" name="nombre" class="form-control" id="validationDefault011" value="Representante" required>
						</div>
		
						<div class="col-md-7">
							<label for="validationDefaultUsername" class="form-label">Correo Electrónico</label>
							<input type="email" name="correo" class="form-control" id="validationDefaultUsername" required>
						</div>
		
						<div class="col-md-4">
							<label class="form-label" for="autoSizingInputGroup">Telefono</label>
							<div class="input-group">
							  <div class="input-group-text">+52</div>
							  <input type="text" name="telefono" class="form-control" id="autoSizingInputGroup" maxlength="10" placeholder="123-456-7891">
							</div>
						</div>
		
						<div class="col-md-7">
							<label for="validationDefault03" class="form-label">Contraseña</label>
							<input type="password" name="password" class="form-control" id="validationDefault03" aria-describedby="passwordHelpBlock" required>
							<div id="passwordHelpBlock" class="form-text">
									Considere una contraseña segura, con números, mayúsculas y al menos un caracter especial
							</div> 
						</div>

						<div class="col-md-7">
							<label for="validationDefault10" class="form-label">Verificación Contraseña</label>
							<input type="password" name="passwordver"class="form-control" id="validationDefault10" aria-describedby="passwordHelpVer" required>
							<div id="passwordHelpVer" class="form-text"></div> 
						</div>

						<div class="col-10">
							<label for="validationDefault04" class="form-label">Dirección</label>
							<input type="text" name="direccion" class="form-control" id="validationDefault04" placeholder="Av. del Charro" required>
						</div>

						<div class="col-md-9">
							<label for="textareadescrip" class="form-label">Descripción de Empresa</label>
							<textarea class="form-control" name="descripcion" aria-label="With textarea" id="textareadescrip" required></textarea>
						  </div>
		
		
		
						<div class="col-12">
							<button type="submit" name="registrarse" class="btn btn-primary">Registarse</button>
						</div>
					</form>
				</div>
	</div>
	<?php include('../components/footer.inc.php'); ?>

	<?php

	if(isset($_POST['registrarse'])){  
		
		$users_empre = $_POST['empresa'];
		$users_nom = $_POST['nombre'];
		$users_correo = $_POST['correo'];
		$users_contra = $_POST['password'];
		$users_contraver = $_POST['passwordver'];
		$users_tele = $_POST['telefono'];
		$users_dire = $_POST['direccion'];
		$users_descrip = $_POST['descripcion'];

		require('../components/dbconn.inc.php');

		$check_email_query="SELECT * from `empleadores` WHERE Correo = '{$users_correo}';";  

		$run_query=mysqli_query($conn,$check_email_query);  
	
		if(mysqli_num_rows($run_query)>0){  
			echo "<script>alert('El correo: .$users_correo. ya existe, elige uno distinto')</script>";  
			exit();  
		}

		$sql = "INSERT INTO empleadores (Empresa, Representante, Correo, Contra , Telefono, Direccion, Descripcion) 
			VALUES ('$users_empre', '$users_nom', '$users_correo', '$users_contra','$users_tele','$users_dire', '$users_descrip');";

		if(strcmp($users_contra, $users_contraver) == 0){
			if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Cuenta registrada Exitosamente');
				window.open('/pmss/index.php','_self'); </script>";

			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		else{
			echo "<script>alert('La verificacion de contraseñas no coincide')</script>";			
			exit();
		}
		$conn->close();
		}
	?>

