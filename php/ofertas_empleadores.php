<html>
	<head> 
		<title>Impulso Migrante</title>
		<script src="javascript.js"></script>
		<link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Base
					ball_cap_line_drawing.svg/1200px-Baseball_cap_line_drawing.svg.png">
		<link rel="stylesheet" type="text/css" href="../mystyle.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	</head>

	<body onload="hide('zoom')">
		<nav class="navbar navbar-expand-lg" style="background-color: #D1D1D1;border: 2px outset gray;">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
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

        <div id="zoom" class="zoom" style="position:absolute;border:3px solid #73AD21;left: 20px;right:20px;background-color:#D1D1D1;z-index:1;font-size: 20px;">  
            <span id="span_muestra"></span>
            <button onclick="hide('zoom')" class="btn btn-primary">Cerrar</button>
        </div>

        <h2 style="text-align:center;margin:5px;"><a id="subs">Ofertas de Empleadores (Busco Trabajo)</h2>

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

		<div class="flex-container" id="main_container">

			<?php
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

			$sql="SELECT emp.id, emp.Empresa, emp.Representante, emp.Correo, emp.Contra, emp.Telefono,
                emp.Direccion, emp.Descripcion, trab.Oficio as 'Oficio', trab.Experiencia as 'Experiencia', 
                trab.Descripcion as 'DescripcionTrab' 
                FROM `Empleadores` emp, `Trabajos_Empleadores` trab 
                WHERE emp.id = trab.id;";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
                    $x = rand(1,6);
					echo "<div class='elem' id='".$row["id"]."' onclick='show_zoom()'>
                    <p class='".$row["id"]."'>
					<img class='".$row["id"]."' src='fotos/pere".$x.".JPG'/> 
					<span>Id:<span id='id' class='".$row["id"]."'>". $row["id"]. 
					" </span></span></br><span>Empresa: <span id= 'empresa' class='".$row["id"]."' >". $row["Empresa"]. 
					" </span></span></br><span>Oficio: <span id='oficio'class='".$row["id"]."'>" . $row["Oficio"].   
					" </span></span></br><span>Experiencia: <span id='experiencia'class='".$row["id"]."'>" . $row["Experiencia"]. 
					" </span></span></br><span>Descripcion Trabajo: <span id='descripcion-trab'class='".$row["id"]."'>" . $row["DescripcionTrab"].
					// " </span></span></br><span>Contra:<span id='contra'class='".$row["id"]."'>" . $row["Contra"] .
					" </span></span></br><span>Telefono: <span id='telefono'class='".$row["id"]."'>" . $row["Telefono"] .
                    " </span></span></br><span>Representante: <span id ='representante' class='".$row["id"]."'>" . $row["Representante"] .
					" </span></span></br><span>Correo: <span id='correo'class='".$row["id"]."'>" . $row["Correo"]. 
                    " </span></span></br><span>Direccion: <span id='direccion'class='".$row["id"]."'>" . $row["Direccion"]. 
					" </span></span></br><span>Descripcion: <span id='descripcion'class='".$row["id"]."'>" . $row["Descripcion"].
					" </span></span></p></div>";
					}
			}
			else {
				echo "0 users";
			}

			$conn->close();
			?>
        </div>
	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script type="text/javascript" src="javascript.js"></script> 
        <script>
            $("#main_container").click(function(event) {
                const text = document.getElementById(event.target.className).innerHTML;
                document.getElementById("span_muestra").innerHTML=text;
            });

            function hide(id){
                document.getElementById(id).style.display="none";
            }

            function show_zoom(){

                document.getElementById("zoom").style.display="block";
                }
        </script>
		
	</body>
</html>