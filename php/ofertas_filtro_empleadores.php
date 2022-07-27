<html> 
    <title>Impulso Migrante</title>
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

        <div id="zoom" class="zoom" style="position:absolute;border:3px solid #73AD21;left: 20px;right:20px;text-align: center;background-color:#D1D1D1;z-index:1;font-size: 20px;">
            <span id="span_muestra"></span>
            <button onclick="hide('zoom')" class="btn btn-primary">Cerrar</button>
        </div>

        <FORM METHOD="POST" ACTION="ofertas_empleadores.php">
        <div class="flex-container" id="main_container">
        <?php
            $users_of = $_POST['oficio'];
            $users_fe = $_POST['fecha'];
            $users_exp = $_POST['experiencia'];

            $servername = "sql313.epizy.com";
			$username = "epiz_32212029";
			$password = "Td30EDZH5T";
			$dbname = "epiz_32212029_BaseDatos"; 

            
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            };

            if($users_of != 'Oficio' && $users_exp != 'Experiencia'){
                $sql="SELECT emp.id, emp.Empresa, emp.Representante, emp.Correo, emp.Contra, emp.Telefono,
                emp.Direccion, emp.Descripcion, trab.Oficio as 'Oficio', trab.Experiencia as 'Experiencia', 
                trab.Descripcion as 'DescripcionTrab' 
                FROM `Empleadores` emp, `Trabajos_Empleadores` trab 
                WHERE emp.id = trab.id and Oficio = '{$users_of}' and Experiencia = '{$users_exp}';";
            }
            elseif($users_of != 'Oficio'){
                $sql="SELECT emp.id, emp.Empresa, emp.Representante, emp.Correo, emp.Contra, emp.Telefono,
                emp.Direccion, emp.Descripcion, trab.Oficio as 'Oficio', trab.Experiencia as 'Experiencia', 
                trab.Descripcion as 'DescripcionTrab' 
                FROM `Empleadores` emp, `Trabajos_Empleadores` trab 
                WHERE emp.id = trab.id and Oficio = '{$users_of}';";
            }
            elseif($users_exp != 'Experiencia'){
                $sql="SELECT emp.id, emp.Empresa, emp.Representante, emp.Correo, emp.Contra, emp.Telefono,
                emp.Direccion, emp.Descripcion, trab.Oficio as 'Oficio', trab.Experiencia as 'Experiencia', 
                trab.Descripcion as 'DescripcionTrab' 
                FROM `Empleadores` emp, `Trabajos_Empleadores` trab 
                WHERE emp.id = trab.id and Experiencia = '{$users_exp}';";
            }
            else{
                $sql="SELECT emp.id, emp.Empresa, emp.Representante, emp.Correo, emp.Contra, emp.Telefono,
                emp.Direccion, emp.Descripcion, trab.Oficio as 'Oficio', trab.Experiencia as 'Experiencia', 
                trab.Descripcion as 'DescripcionTrab' 
                FROM `Empleadores` emp, `Trabajos_Empleadores` trab 
                WHERE emp.id = trab.id;";
            }


            $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='elem'><p>
                <img class='perfil' src='fotos/pere1.JPG'
				/> 
                Id: ". $row["id"]. 
                " </br>Empresa: ". $row["Empresa"]. 
                " </br>Representante: " . $row["Representante"] . 
                " </br>Correo: " . $row["Correo"] . 
                " </br>Password: " . $row["Contra"] . 
                " </br>Telefono: " . $row["Telefono"] .  
                " </br>Direccion: " . $row["Direccion"]. 
                " </br>Descripcion: " . $row["Descripcion"].
                " </br>Oficio: " . $row["Oficio"].
                " </br>Experiencia: " . $row["Experiencia"].
                " </br>Descripcion Trabajo: " . $row["DescripcionTrab"]. 
                "</p></div>";
                }
        }
        else {
            echo "0 users";
        }

            $conn->close();
            ?>
            </div>

             <input type="submit" value="Volver al menu" name="volver">
        </FORM> 

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