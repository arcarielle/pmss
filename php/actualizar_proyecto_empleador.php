<?php
        session_start();  

        $users_id = $_POST['id'];
        $users_ofi = $_POST['oficio'];
        $users_exp = $_POST['experiencia'];
		$users_descrip = $_POST['descripcion'];

        require('../components/dbconn.inc.php');

        if(isset($_POST['actualizar'])){  
            $sql = "UPDATE trabajos_empleadores SET Oficio='$users_ofi', Experiencia='$users_exp',
			Descripcion='{$users_descrip}' WHERE id_main = '{$users_id}';";
        
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Proyecto Actualizado Exitosamente')</script>";
                header("Location: ../index.php");
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        elseif(isset($_POST['eliminar'])){
            $sql = "DELETE FROM trabajos_empleadores WHERE id_main = '{$users_id}';";
        
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Proyecto Eliminado Exitosamente')</script>";
                header("Location: ../index.php");
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }

?>