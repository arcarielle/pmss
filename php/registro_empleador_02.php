<?php include('../components/headreg.inc.php'); ?>
<body>
	<?php include('../components/navbar.inc.php'); ?>

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

            require('../components/dbconn.inc.php');

            $sql = "INSERT INTO empleadores (Empresa, Representante, Correo, Contra , Telefono, Direccion, Descripcion) 
                VALUES ('$users_empre', '$users_nom', '$users_correo', '$users_contra','$users_tele','$users_dire', '$users_descrip');";
        
            if ($conn->query($sql) === TRUE) {
                echo "<p><br>Empresa: ". $users_empre ."<br>Nombre: ". $users_nom . " <br>Correo: " . $users_correo.
                // " <br>Contra: " . $users_contra.
                 " <br>Telefono: " . $users_tele. 
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
				<a class="nav-link" href="./ofertas.php">Ver Ofertas</a>
            </button>
        </FORM>
        <?php include('../components/footer.inc.php'); ?>
    </body>
</html>