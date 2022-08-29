<?php
    session_start();

    if(isset($_POST['crear'])){  

        $users_ofi = $_POST['oficio'];
        $users_exp = $_POST['experiencia'];
        $users_sex = $_POST['sex'];
        $users_hora1 = $_POST['schdcont1'];
        $users_hora2 = $_POST['schdcont2'];
        $users_lengua = $_POST['lang'];
        $users_tipo = $_POST['tipo'];
        $users_sueldo = $_POST['sueldo'];
        $users_descrip = $_POST['description'];
        $users_dispon = $_POST['disponibilidad'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if($_SESSION["userType"]=="migrante"){
            header("location: /pmss/php/controlContratador.php?error=eresMig");
            exit();    
        }

        addProject($conn, $_SESSION["userid"],$users_ofi, $users_exp, $users_sex, $users_hora1, $users_hora2, 
        $users_lengua, $users_tipo, $users_sueldo, $users_descrip, $users_dispon);
        }
    
    else{
        header("location: /pmss/php/controlContratador.php?error=stmtfailed");
        exit();
    }
?>