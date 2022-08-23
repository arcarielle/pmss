<?php
    if(isset($_POST['login'])){  
        $users_correo = $_POST['email'];
        $users_contra = $_POST['password'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        login($conn, $users_correo, $users_contra);
        }
    
    else{
        header("location: /pmss/php/inicioSesion.php");
        exit();
    }
	?>