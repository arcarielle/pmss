<?php include('../components/headreg.inc.php'); ?>
<body>
    <?php include('../components/navbar.inc.php'); ?>
    <?php include('../components/btnhandler.inc.php'); ?>
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

            require('../components/dbconn.inc.php');

            $sql = "INSERT INTO empleados (Nombre, Apellido, Sexo, Correo, Contra , Telefono, Direccion, Descripcion, Oficio, Experiencia) 
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
        <?php include('../components/footer.inc.php'); ?>