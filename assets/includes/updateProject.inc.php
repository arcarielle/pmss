<?php
    session_start();

    $users_proyecto_id = $_POST['id-proyecto'];
    $users_ofi = $_POST['oficio'];
    $users_exp = $_POST['experiencia'];
    $users_sex = $_POST['sex'];
    $users_hora1 = $_POST['schdcont1'];
    $users_hora2 = $_POST['schdcont2'];
    $users_lengua = $_POST['lang'];
    $users_tipo = $_POST['tipo'];
    $users_sueldo = $_POST['sueldo'];
    $users_disponibilidad = $_POST['disponibilidad'];
    $users_descrip = $_POST['description'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(isset($_POST['actualizar'])){  
        updateProject($conn, $users_proyecto_id ,$users_ofi, $users_exp, $users_sex, $users_hora1, 
        $users_hora2, $users_lengua, $users_tipo, $users_sueldo, $users_disponibilidad, $users_descrip);
        }
        
    else if(isset($_POST['eliminar'])){  
        deleteProject($conn, $users_proyecto_id);
        }

    else{
        header("location:/pmss/php/controlContratador.php?error=stmtfailed");
        exit();
    }
?>