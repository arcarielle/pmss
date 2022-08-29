<?php
    if(isset($_POST['actualizar'])){  

        $users_id = $_POST['id-mig'];
        $users_nom = $_POST['nombre'];
        $users_ape = $_POST['apellido'];
        $users_sex = $_POST['sex'];
        $users_correo = $_POST['email'];
        $users_lang = $_POST['lang'];
        $users_birth = $_POST['birthday'];
        $users_tele = $_POST['phone'];
        $users_tele_whats = $_POST['phone2'];
        $users_dire = $_POST['address'];
        $users_ofi1 = $_POST['oficio1'];
        $users_ofi1_exp = $_POST['oficio1-exp'];
        $users_ofi2 = $_POST['oficio2'];
        $users_ofi2_exp = $_POST['oficio2-exp'];
        $users_estancia = $_POST['estancia'];
        $users_descrip = $_POST['description'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        updateMig($conn, $users_id, $users_nom, $users_ape, $users_sex, $users_correo,
            $users_lang, $users_birth, $users_tele, $users_tele_whats,$users_dire, 
            $users_estancia,$users_descrip, $users_ofi1, $users_ofi1_exp, $users_ofi2,
            $users_ofi2_exp);
        }
    
    else{
        header("location:/pmss/php/controlAplicante.php?error=stmtfailed");
        exit();
    }
	?>