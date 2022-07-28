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
						<a class="nav-link" href=".htdocs/index.php">Mi Cuenta</a>
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
            $users_nom = $_POST['nombre'];
            $users_ape = $_POST['apellido'];
            $users_sex = $_POST['sexo'];
            $users_correo = $_POST['correo'];
            $users_contra = $_POST['password'];
            $users_tele = $_POST['telefono'];
            $users_dire = $_POST['direccion'];
            $users_descrip = $_POST['descripcion'];
            $users_ofi = $_POST['oficio'];
            $users_exp = $_POST['experiencia'];

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

            $sql = "INSERT INTO Empleados (Nombre, Apellido, Sexo, Correo, Contra , Telefono, Direccion, Descripcion, Oficio, Experiencia) 
                VALUES ('$users_nom', '$users_ape', '$users_sex', '$users_correo', '$users_contra','$users_tele','$users_dire', '$users_descrip','$users_ofi', '$users_exp');";
        
            if ($conn->query($sql) === TRUE) {
                echo "<p><br>Nombre: ". $users_nom . " <br>Apellido: " . $users_ape. " <br>Sexo: " . $users_sex." <br>Correo: " . $users_correo.
                // " <br>Contra: " . $users_contra. 
                " <br>Telefono: " . $users_tele."<br>Direccion: ". $users_dire .
                "<br>Descripcion: ".$users_descrip ."<br>Oficio: ". $users_ofi ."<br>Experiencia: ". $users_exp."<br>";
                echo "<br>Cuenta registrada Exitosamente</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            ?>

            <p>Cd. Juarez, Chih a: <u><b>
                <?php
                    echo date ("d/m/Y"); 
                ?>
            <br><br></b></u></p></div>

            <input type="submit" value="Volver al menu" name="volver">
            <button class="btn btn-primary">
				<a class="nav-link" href="./ofertas_empleadores.php">Ver Ofertas</a>
            </button>
        </FORM>
        <script type="text/javascript" src="../javascript.js"></script> 
    </body>
</html>