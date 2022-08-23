<?php
    if(isset($_POST['registrarse'])){  

        $users_emp = $_POST['empresa'];
        $users_giro = $_POST['giro'];
        $users_correo = $_POST['email'];
        $users_contra = $_POST['pwd'];
        $users_contraver = $_POST['confPwd'];
        $users_tele = $_POST['phone'];
        $users_dire = $_POST['address'];

        $users_cont1_nom = $_POST['cont1-nombre'];
        $users_cont1_ape = $_POST['cont1-apellido'];
        $users_cont1_corr = $_POST['cont1-email'];
        $users_cont1_hor1 = $_POST['cont1-schdcont1'];
        $users_cont1_hor2 = $_POST['cont1-schdcont2'];

        $users_cont2_nom = $_POST['cont2-nombre'];
        $users_cont2_ape = $_POST['cont2-apellido'];
        $users_cont2_corr = $_POST['cont2-email'];
        $users_cont2_hor1 = $_POST['cont2-schdcont1'];
        $users_cont2_hor2 = $_POST['cont2-schdcont2'];

        $users_descrip = $_POST['description'];
        
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(pwdMatch($users_contra, $users_contraver) !== false){
            header("location:/pmss/php/registroContratador.php?error=pwdsdontmatch");
            exit();
        }

        if(user_exists_emp($conn, $users_correo) !== false){
            header("location:/pmss/php/registroContratador.php?error=alrdyexists");
            exit();
        }

        createEmp($conn, $users_emp, $users_giro, $users_correo, $users_contra, $users_tele, 
            $users_dire, $users_cont1_nom, $users_cont1_ape, $users_cont1_corr, $users_cont1_hor1, 
            $users_cont1_hor2, $users_cont2_nom, $users_cont2_ape, $users_cont2_corr, 
            $users_cont2_hor1, $users_cont2_hor2, $users_descrip);

        }
    
    else{
        header("location: /pmss/php/registroContratador.php?error=stmtfailed");
        exit();
    }
	?>