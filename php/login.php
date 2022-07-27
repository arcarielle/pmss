<html>
	<head> 
		
        <title>Impulso Migrante</title>
		<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Base
					ball_cap_line_drawing.svg/1200px-Baseball_cap_line_drawing.svg.png">
		<link rel="stylesheet" type="text/css" href="../mystyle.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg" style="background-color: #D1D1D1;border: 2px outset gray;">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<h2>Hermanos Am&#233ricanos</h2> 
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

			<h2 style="text-align:center;width: 50%;margin: 5px auto;"><a id="subs">Iniciar Sesion</h2>

			<div style="background-color:#D1D1D1;width: 50%;margin: 5px auto;" class="align-items-center">
				<form>
					<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Correo</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Contrasenia</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>

			<footer class="text-center text-white" style="background-color:#D1D1D1;position: fixed;bottom: 5px;width: 100%;">
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
		<script>

				function bien(){
					location.replace("./ofertas.html")
				};
		</script>
	</body>
</html>
