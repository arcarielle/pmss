<?php include('../components/headreg.inc.php'); ?>

<body onload="bien()">
	<?php include('../components/navbar.inc.php'); ?>

		<div class="grid" style="--bs-gap: .25rem 1rem;--bs-columns:12;">
			
		<div class="g-col-6">
			<h2 style="text-align:center;"><a id="subs">Suscripción de Empleado (Busco Trabajo)</h2>
<form class="row g-3" action="./registro_empleado_02.php" method="post">			
				<div class="col-md-4">
					<label for="validationDefault01" class="form-label">Nombre</label>
					<input type="text" name="nombre" class="form-control" id="validationDefault01" value="Marco" required>
				</div>
				<div class="col-md-4">
					<label for="validationDefault02" class="form-label">Apellido</label>
					<input type="text" name="apellido" class="form-control" id="validationDefault02" value="Garcia" required>
				</div>

				<div class="col-md-3">
					<label for="validationDefault06" class="form-label">Sexo</label>
					<select id="validationDefault06" name="sexo" class="form-select" required>
						<option selected>Hombre</option>
						<option>Mujer</option>
						<option>Otro</option>
					</select>
				</div>

                <div class="col-md-3">
					<label for="validationDefault02" class="form-label">Oficio</label>
					<select id="validationDefault02" name="oficio" class="form-select" required>
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
					<input type="password" name="password"class="form-control" id="validationDefault03" aria-describedby="passwordHelpBlock" required>
                    <div id="passwordHelpBlock" class="form-text">
						Considere una contraseña segura, con números, mayúsculas y al menos un caracter especial
					</div> 
                </div>

				<div class="col-10">
					<label for="validationDefault04" class="form-label">Dirección</label>
					<input type="text" name="direccion" class="form-control" id="validationDefault04" placeholder="Av. del Charro" required>
				</div>

				<div class="col-md-9">
					<label for="textareadescrip" class="form-label">Descripción de sus habilidades</label>
					<textarea class="form-control" name="descripcion" aria-label="With textarea" id="textareadescrip" required></textarea>
				  </div>



				<div class="col-12">
					<button type="submit" class="btn btn-primary">Registarse</button>
				</div>
			</form>
		</div>
	</div>
	<?php include('../components/footer.inc.php'); ?>
	</body>
</html>
