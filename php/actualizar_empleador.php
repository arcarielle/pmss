<?php

        session_start();  
        $users_empre = $_POST['empresa'];
        $users_nom = $_POST['nombre'];
        $users_correo = $_POST['correo'];
        $users_contra = $_POST['password'];
        $users_tele = $_POST['telefono'];
        $users_dire = $_POST['direccion'];
        $users_descrip = $_POST['descripcion'];

            require('../components/dbconn.inc.php');

            $sql = "UPDATE empleadores SET Empresa='$users_empre', Representante='$users_nom',
            Correo='{$users_correo}',Contra='{$users_contra}',Telefono='{$users_tele}',Direccion='{$users_dire}',
			Descripcion='{$users_descrip}' WHERE Correo = '{$_SESSION['email']}';";
        
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Cuenta Actualizada Exitosamente')</script>";
                header("Location: ../index.php");
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
?>