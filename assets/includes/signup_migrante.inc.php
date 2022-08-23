<?php
    if(isset($_POST['registrarse'])){  

        $users_nom = $_POST['nombre'];
        $users_ape = $_POST['apellido'];
        $users_sex = $_POST['sex'];
        $users_correo = $_POST['email'];
        $users_contra = $_POST['pwd'];
        $users_contraver = $_POST['confPwd'];
        $users_lang = $_POST['lang'];
        $users_birth = $_POST['birthday'];
        $users_tele = $_POST['phone'];
        $users_dire = $_POST['address'];
        $users_ofi1 = $_POST['oficio1'];
        $users_ofi1_exp = $_POST['oficio1-exp'];
        $users_ofi2 = $_POST['oficio2'];
        $users_ofi2_exp = $_POST['oficio2-exp'];
        $users_descrip = $_POST['description'];
        
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(pwdMatch($users_contra, $users_contraver) !== false){
            header("location:/pmss/php/registroAplicante.php?error=pwdsdontmatch");
            exit();
        }

        if(user_exists_mig($conn, $users_correo) !== false){
            header("location:/pmss/php/registroAplicante.php?error=alrdyexists");
            exit();
        }

        createMig($conn, $users_nom, $users_ape, $users_sex, $users_correo,
            $users_contra, $users_lang, $users_birth, $users_tele, $users_dire, $users_descrip,
            $users_ofi1, $users_ofi1_exp, $users_ofi2, $users_ofi2_exp);
        }
    
    else{
        header("location:/pmss/php/registroAplicante.php?error=stmtfailed");
        exit();
    }
	?>