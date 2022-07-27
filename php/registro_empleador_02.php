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

                  <li class="nav-item" id="signin"> 
                    <button class="btn btn-primary">
						<a class="nav-link" href="./index.php">Mi Cuenta</a>
                    </button>
				  </li>

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

        <div><p><b>REGISTRADO</b></p>

        <FORM METHOD="POST" ACTION="../index.php">
        <?php
            $users_empre = $_POST['empresa'];
            $users_nom = $_POST['nombre'];
            $users_correo = $_POST['correo'];
            $users_contra = $_POST['password'];
            $users_tele = $_POST['telefono'];
            $users_dire = $_POST['direccion'];
            $users_descrip = $_POST['descripcion'];

            $servername = "sql313.epizy.com";
            $username = "epiz_32212029";
            $password = "Td30EDZH5T";
            $dbname = "epiz_32212029_BaseDatos"; 

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO Empleadores (Empresa, Representante, Correo, Contra , Telefono, Direccion, Descripcion) 
                VALUES ('$users_empre', '$users_nom', '$users_correo', '$users_contra','$users_tele','$users_dire', '$users_descrip');";
        
            if ($conn->query($sql) === TRUE) {
                echo "<p><br>Empresa: ". $users_empre ."<br>Nombre: ". $users_nom . " <br>Correo: " . $users_correo.
                " <br>Contra: " . $users_contra. " <br>Telefono: " . $users_tele. 
                "<br>Direccion: ". $users_dire ."<br>Descripcion: ". $users_descrip ."<br>";
                echo "<br>Cuenta registrada exitosamente</p>";
            } else {
                echo "Error: " . $sql . "<br></p>" . $conn->error;
            }

            $conn->close();
            ?>

            <p>Cd. Juarez, Chih a: <u><b>
                <?php
                    echo date ("d/m/Y"); 
                ?>
            <br><br></b></u></div>

            <input type="submit" value="Volver al menu" name="volver">
            <button class="btn btn-primary">
				<a class="nav-link" href="./ofertas_empleadores.php">Ver Ofertas</a>
            </button>
        </FORM>
    </body>
</html>