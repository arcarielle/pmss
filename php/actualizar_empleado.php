<?php

        session_start();  
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

            $sql = "UPDATE empleados SET Nombre='$users_nom',Apellido='$users_ape',Sexo='{$users_sex}',
			Correo='{$users_correo}',Contra='{$users_contra}',Telefono='{$users_tele}',Direccion='{$users_dire}',
			Descripcion='{$users_descrip}',Oficio='{$users_ofi}',Experiencia='{$users_exp}' WHERE Correo = '{$_SESSION['email']}';";
        
            if ($conn->query($sql) === TRUE) {
                echo "<br>Cuenta Actualizada Exitosamente</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
?>