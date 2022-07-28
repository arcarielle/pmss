<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
	//header("Location: ../index.php");
}
?>

<?php include('../components/headreg.inc.php'); ?>

<body>
	<?php include('../components/navbar.inc.php'); ?>

	<form METHOD="POST" ACTION="/pmss/index.php">
	<?php
            require('../components/dbconn.inc.php');
			
			$check_user="SELECT * FROM `empleados` WHERE Correo ='{$_SESSION['email']}'";

            $result = $conn->query($check_user);

			if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {
						$users_id = $row["id"]; 
						$users_nom = $row["Nombre"];
						$users_ape = $row["Apellido"];
						$users_sex = $row["Sexo"];
						$users_correo = $row["Correo"];
						$users_contra = $row["Contra"];
						$users_tele = $row["Telefono"];
						$users_dire = $row["Direccion"];
						$users_descrip = $row["Descripcion"];
						$users_ofi = $row["Oficio"];
						$users_exp = $row["Experiencia"];
						
						echo "<p><br>Nombre: ". $users_nom . " <br>Apellido: " . $users_ape. " <br>Sexo: " . $users_sex.
						" <br>Correo: " . $users_correo." <br>Contra: " . $users_contra. 
                		" <br>Telefono: " . $users_tele."<br>Direccion: ". $users_dire .
                		"<br>Descripcion: ".$users_descrip ."<br>Oficio: ". $users_ofi ."<br>Experiencia: ". $users_exp."<br>";
						}
			}
			else {
				echo "error xd";
			}
	
				$conn->close();
			?>

			<input type="submit" value="Volver al menu" name="volver">
    </form>
	<?php include('../components/footer.inc.php'); ?>
	</body>
</html>
