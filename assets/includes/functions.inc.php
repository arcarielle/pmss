<?php

function pwdMatch($pwd, $pwd2){
    $result;
    if($pwd !== $pwd2){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function user_exists_mig($conn, $users_correo){
    $sql = "SELECT * FROM migrantes WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /pmss/php/registroAplicante.php?error=stmtfailed");
        exit();        
    }

    mysqli_stmt_bind_param($stmt, "s", $users_correo);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function user_exists_emp($conn, $users_correo){
    $sql = "SELECT * FROM empleadores WHERE correo = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /pmss/php/registroContratador.php?error=stmtfailed");
        exit();        
    }

    mysqli_stmt_bind_param($stmt, "s", $users_correo);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createMig($conn, $users_nom, $users_ape, $users_sex, $users_correo,
    $users_contra, $users_lang, $users_birth, $users_tele, $users_dire, $users_descrip,
    $users_ofi1, $users_ofi1_exp, $users_ofi2, $users_ofi2_exp){

    $sql = "INSERT INTO migrantes (nombre, apellido, sexo, email, pwd, lengua, birthday, telefono,
        domicilio, descripcion, oficio1, oficio1_exp, oficio2, oficio2_exp) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: /pmss/php/registroAplicante.php?error=stmtfailed");
        exit();        
    }

    $hashedPwd = password_hash($users_contra, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssssssssssss", $users_nom, $users_ape, $users_sex, $users_correo,
        $hashedPwd, $users_lang, $users_birth, $users_tele, $users_dire, $users_descrip,
        $users_ofi1, $users_ofi1_exp, $users_ofi2, $users_ofi2_exp);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /pmss/php/registroAplicante.php?error=none");
    exit();  
}

function updateMig($conn, $users_id, $users_nom, $users_ape, $users_sex, $users_correo,
    $users_lang, $users_birth, $users_tele, $users_dire, $users_descrip,
    $users_ofi1, $users_ofi1_exp, $users_ofi2, $users_ofi2_exp){

            $sql = "UPDATE migrantes SET nombre='$users_nom', apellido='$users_ape', email='$users_correo',
            domicilio='$users_dire', telefono='$users_tele', sexo='$users_sex', lengua='$users_lang',
            birthday='$users_birth', oficio1='$users_ofi1', oficio1_exp='$users_ofi1_exp',
            oficio2='$users_ofi2', oficio2_exp='$users_ofi2_exp', descripcion='$users_descrip' 
            WHERE id_mig= '{$users_id}';";

            if ($conn->query($sql) === TRUE) {
                
                header("location: /pmss/php/controlAplicante.php");
                // echo "<script>alert('Proyecto Actualizado Exitosamente')</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
            $conn->close();
}

function createEmp($conn, $users_emp, $users_giro, $users_correo, $users_contra, $users_tele, 
            $users_dire, $users_cont1_nom, $users_cont1_ape, $users_cont1_corr, $users_cont1_hor1, 
            $users_cont1_hor2, $users_cont2_nom, $users_cont2_ape, $users_cont2_corr, 
            $users_cont2_hor1, $users_cont2_hor2, $users_descrip){

            $sql = "INSERT INTO empleadores (empresa, giro, correo, pwd, telefono, 
                direccion, cont1_nom, cont1_ape, cont1_correo, cont1_hora1, cont1_hora2,
                cont2_nom, cont2_ape, cont2_correo, cont2_hora1, cont2_hora2, descripcion) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location: /pmss/php/registroContratador.php?error=stmtfailed");
                exit();        
            }
        
            $hashedPwd = password_hash($users_contra, PASSWORD_DEFAULT);
        
            mysqli_stmt_bind_param($stmt,"sssssssssssssssss", $users_emp, $users_giro, $users_correo,
            $hashedPwd, $users_tele, $users_dire, $users_cont1_nom, $users_cont1_ape,
            $users_cont1_corr, $users_cont1_hor1, $users_cont1_hor2, $users_cont2_nom, 
            $users_cont2_ape, $users_cont2_corr, $users_cont2_hor1, $users_cont2_hor2, $users_descrip);

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: /pmss/php/registroContratador.php?error=none");
            exit();  
}

function updateEmp($conn, $users_id, $users_emp, $users_giro, $users_correo, $users_tele, 
            $users_dire, $users_cont1_nom, $users_cont1_ape, $users_cont1_corr, $users_cont1_hor1, 
            $users_cont1_hor2, $users_cont2_nom, $users_cont2_ape, $users_cont2_corr, 
            $users_cont2_hor1, $users_cont2_hor2, $users_descrip){

                $sql = "UPDATE empleadores SET empresa='$users_emp', giro='$users_giro', correo='$users_correo',
                direccion='$users_dire', telefono='$users_tele', cont1_nom='$users_cont1_nom',
                cont1_ape='$users_cont1_ape', cont1_correo='$users_cont1_corr', cont1_hora1='$users_cont1_hor1',
                cont1_hora2='$users_cont1_hor2', cont2_nom='$users_cont2_nom', cont2_ape='$users_cont2_ape', 
                cont2_correo='$users_cont2_corr', cont2_hora1='$users_cont2_hor1', cont2_hora2='$users_cont2_hor2',
                descripcion='$users_descrip' WHERE id_emp= '{$users_id}';";
    
            if ($conn->query($sql) === TRUE) {
                
                header("location: /pmss/php/controlContratador.php");
                // echo "<script>alert('Proyecto Actualizado Exitosamente')</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
            $conn->close();
}

function addProject($conn, $emp_id, $users_ofi, $users_exp, $users_sex, $users_hora1, $users_hora2, 
        $users_lengua, $users_tipo, $users_sueldo, $users_descrip ){
    
            $sql = "INSERT INTO proyectos_empleadores (id_empresa, oficio, experiencia, sexo, hora1,
            hora2, lengua, tipo, sueldo, descripcion) VALUES (?,?,?,?,?,?,?,?,?,?);";
    
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                // header("location: /pmss/php/administracion/añadirEmpleo.php?error=stmtfailed");
                exit();        
            }
        
            mysqli_stmt_bind_param($stmt,"ssssssssss", $emp_id, $users_ofi, $users_exp, 
            $users_sex, $users_hora1, $users_hora2, $users_lengua, $users_tipo, $users_sueldo, 
            $users_descrip);

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: /pmss/php/controlContratador.php");
            exit();  

}

function updateProject($conn, $users_proyecto_id ,$users_ofi, $users_exp, $users_sex, $users_hora1, $users_hora2, 
    $users_lengua, $users_tipo, $users_sueldo, $users_descrip ){

        $sql = "UPDATE proyectos_empleadores SET oficio='$users_ofi', experiencia='$users_exp',
            sexo='$users_sex', hora1='$users_hora1', hora2='$users_hora2', lengua='$users_lengua',
            tipo='$users_tipo', sueldo='$users_sueldo', descripcion='$users_descrip' 
            WHERE id_proyecto = '{$users_proyecto_id}';";

        if ($conn->query($sql) === TRUE) {
            
            header("location: /pmss/php/controlContratador.php");
            // echo "<script>alert('Proyecto Actualizado Exitosamente')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
}

function deleteProject($conn, $users_proyecto_id){
    $sql = "DELETE FROM proyectos_empleadores WHERE id_proyecto = '{$users_proyecto_id}';";
        
            if ($conn->query($sql) === TRUE) {
                // echo "<script>alert('Proyecto Eliminado Exitosamente')</script>";
                header("location: /pmss/php/controlContratador.php");
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

}

function login($conn, $users_correo, $users_contra){
    $user_exists = user_exists_mig($conn, $users_correo, $users_contra);
    if($user_exists === false){
        
            $user_exists = user_exists_emp($conn, $users_correo, $users_contra);
            if($user_exists === false){
                header("location: /pmss/php/inicioSesion.php?error=notFound");
                exit();
            }
            $pwdhashed = $user_exists["pwd"];
            $checkPwd = password_verify($users_contra, $pwdhashed);
        
            if($checkPwd === false){
                header("location: /pmss/php/inicioSesion.php?error=pwdNoMatch");
                exit();
            }
            else if($checkPwd === true){
                session_start();
                $_SESSION["userType"] = "empleador";
                $_SESSION["userid"] = $user_exists["id_emp"];
                $_SESSION["username"] = $user_exists["empresa"];
                $_SESSION["userEmail"] = $user_exists["correo"];
                header("location: /pmss/index.php");
                exit();
            }
    }
    $pwdhashed = $user_exists["pwd"];
    $checkPwd = password_verify($users_contra, $pwdhashed);

    if($checkPwd === false){
        header("location: /pmss/php/inicioSesion.php?error=pwdNoMatch");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userType"] = "migrante";
        $_SESSION["userid"] = $user_exists["id_mig"];
        $_SESSION["username"] = $user_exists["nombre"];
        $_SESSION["userEmail"] = $user_exists["email"];
        header("location: /pmss/index.php");
        exit();
    }

}




// function filtro_empleadores(){
    
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "bdmigrantes2.0";
 
//     $conn = new mysqli($servername, $username, $password, $dbname);
//         if ($conn->connect_error) {
//             die("Connection failed: " . $conn->connect_error);
//     };

//     $sql="SELECT pro.id_empresa, pro.id_proyecto, pro.oficio, pro.experiencia, pro.sexo, pro.hora1, pro.hora2, pro.lengua,
//         pro.tipo, pro.sueldo, pro.descripcion, 
//         emp.empresa as 'Empresa', emp.giro as 'Giro', emp.correo as 'Correo',
//         emp.direccion as 'Direccion', emp.telefono as 'Telefono', emp.giro as 'Giro'  
//         FROM `proyectos_empleadores` pro, `empleadores` emp 
//         WHERE pro.id_empresa = emp.id_emp;";

//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         while($row = $result->fetch_assoc()) {

//         echo "
    
//     <div class='card' style='width: 18rem;margin:10px;'>
//         <div class='card-body'>
            
//             <h5 class='card-title'>".$row['Empresa']."</h5>

//             <h6 class='card-title'>".$row['oficio']."</h6>
//             <p class='card-text'>Experiencia: ".$row['experiencia']."</p>
//         </div>
//     </div>

//         ";}
//     }
//     else {
//     echo "0 users";
//     }

//     $conn->close();
// }

?>