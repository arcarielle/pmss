<?php include('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/footer.inc.php'); ?>


        <div id="zoom" class="zoom" style="position:absolute;border:3px solid #73AD21;left: 20px;right:20px;text-align: center;background-color:#D1D1D1;z-index:1;font-size: 20px;">
            
            <span id="span_muestra"></span>
            <button onclick="hide('zoom')" class="btn btn-primary">Cerrar</button>
        </div>

		<nav class="navbar navbar-expand-lg" style="background-color: #D1D1D1; top:10px; 
			width:80%;margin: 5px auto;border: 2px outset gray;">
			<div class="container-fluid">
			<form method="post" action="ofertas_filtro.php">
				<ul class="navbar-nav" style="align-content: center;margin: 5px auto; ">
				  
					<li><select class="form-select form-select-lg mb-3" name="oficio" method="post" action="ofertas_filtro.php" required aria-label=".form-select-lg example" style="width:auto">
						<option value="Oficio" selected>Oficio</option>
						<option value="Carpinteria">Carpinteria</option>
						<option value="Plomeria">Plomeria</option>
						<option value="Albanileria">Albanileria</option>
						<option value="Electricista">Electricista</option>
						<option value="Limpieza">Limpieza</option>
						<option value="Mecanico">Mecanico</option>
						<option value="Barrendero">Barrendero</option>
					  </select></li>

					  <li><select class="form-select form-select-lg mb-3" name="fecha" method="post" action="ofertas_filtro.php" required aria-label=".form-select-lg example" style="width:auto">
						<option value="Fecha" selected>Fecha Publicacion</option>
						<option value="1">Hoy</option>
						<option value="15">Hace 15 dias</option>
						<option value="30">Hace mas de 30 dias</option>
					  </select></li>

					  
					  <li><select class="form-select form-select-lg mb-3" name="experiencia" method="post" action="ofertas_filtro.php" required aria-label=".form-select-lg example" style="width:auto">
						<option value="Experiencia" selected>Experiencia</option>
						<option value="0">Menos de un anio</option>
						<option value="1">Un anio o mas</option>
						<option value="3">Mas de tres anios</option>
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

			$sql = "SELECT * FROM Empleados";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<div class='elem' id='".$row["id"]."' onclick='show_zoom()'>
                    <p class='".$row["id"]."'>
					<img class='".$row["id"]."' src='fotos/pere1.JPG'/> 
					<span>Id:<span id='id' class='".$row["id"]."'>". $row["id"]. 
					" </span></span></br><span>Nombre:<span id= 'nombre' class='".$row["id"]."' >". $row["Nombre"]. 
					" </span></span></br><span>Apeliido:<span id ='apellido' class='".$row["id"]."'>" . $row["Apellido"] .
					" </span></span></br><span>Sexo:<span id='sexo'class='".$row["id"]."'>" . $row["Sexo"] .  
					" </span></span></br><span>Correo:<span id='correo'class='".$row["id"]."'>" . $row["Correo"]. 
					" </span></span></br><span>Contra:<span id='contra'class='".$row["id"]."'>" . $row["Contra"] .
					" </span></span></br><span>Telefono:<span id='telefono'class='".$row["id"]."'>" . $row["Telefono"] .
					" </span></span></br><span>Direccion:<span id='direccion'class='".$row["id"]."'>" . $row["Direccion"]. 
					" </span></span></br><span>Descripcion:<span id='descripcion'class='".$row["id"]."'>" . $row["Descripcion"].  
					" </span></span></p></div>";
					}
			}
			else {
				echo "0 users";
			}

			$conn->close();
			?>
            </div>
	


