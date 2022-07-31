<?php
require('../components/dbconn.inc.php');
        session_start();  
        $users_ofi = $_POST['oficio_new'];
        $users_exp = $_POST['experiencia_new'];
		$users_descrip = $_POST['descripcion_new'];

        $check_user="SELECT * FROM `empleadores` WHERE Correo ='{$_SESSION['email']}'";
        $result = $conn->query($check_user);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $users_id = $row['id'];
            }

            $sql = "INSERT INTO trabajos_empleadores (id, Oficio, Descripcion, Experiencia) 
            VALUES ('$users_id', '$users_ofi', '$users_descrip', '$users_exp');";
        
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Proyecto Agregado Exitosamente')</script>";
                header("Location: ../index.php");
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
?>