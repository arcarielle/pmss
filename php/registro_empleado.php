<html>
	<head> 
		<title>Impulso Migrante</title>
		<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Base
					ball_cap_line_drawing.svg/1200px-Baseball_cap_line_drawing.svg.png">
		<link rel="stylesheet" type="text/css" href="../mystyle.css"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>

	<body onload="bien()">
		<nav class="navbar navbar-expand-lg" style="background-color: #D1D1D1;border: 2px outset gray;">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Base
					ball_cap_line_drawing.svg/1200px-Baseball_cap_line_drawing.svg.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
					-->
					<h2>Hermanos Américanos</h2> 
				</a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav" style= "position: absolute;right: 5px;">

				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
				  </li>

				  <li class="nav-item"> 
					<button class="btn btn-primary">
						<a class="nav-link" href="../index.php">Registrarse</a>
					</button>
				  </li>

				  <li class="nav-item"> 
					<button class="btn btn-primary">
						<a class="nav-link" href="./login.php">Iniciar Sesión</a>
					</button>
				  </li>

				</ul>
			  </div>
			</div>
			<div class="collapse navbar-collapse" id="clock"></div>
		</nav>

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

			<footer class="text-center text-white" style="background-color:#D1D1D1;">
				<a id="redes">
				<div id="container4" class="pop" >
				<a href="https://www.facebook.com/">
					<img style="display: block;margin-left: auto; margin-right: auto;"
					src="https://cdn-icons-png.flaticon.com/512/37/37409.png" 
					width="75" height="75" /> 
				</a>
				<a href="https://www.instagram.com/">
					<img style="display: block;margin-left: auto; margin-right: auto;"
					src="https://image.similarpng.com/very-thumbnail/2020/06/Black-icon-Instagram-logo-transparent-PNG.png" 
					width="75" height="75" /> 
				</a>
				<a href="https://twitter.com/">
					<img style="display: block;margin-left: auto; margin-right: auto;"
					src="https://www.stanthonyshs.org/wp-content/uploads/2018/01/black-and-white-twitter-logo-transparent_100736.png" 
					width="75" height="75" /> 
				</a>
			</div>

				<div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
				  © 2022 Copyright
				</div>
			</footer>
	
	</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="javascript.js"></script> -->
	</body>
</html>
