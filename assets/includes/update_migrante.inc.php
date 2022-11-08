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
        $users_perfil = $_POST['perfil-actual'];

        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTempName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';


        if($fileSize == 0){
            updateMig($conn, $users_id, $users_nom, $users_ape, $users_sex, $users_correo,
            $users_lang, $users_birth, $users_tele, $users_tele_whats,$users_dire, 
            $users_estancia,$users_descrip, $users_ofi1, $users_ofi1_exp, $users_ofi2,
            $users_ofi2_exp, $users_perfil);
        }
        else{

        unlink($users_perfil);

        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowedExt = array('jpg','jpeg','png','pdf');

        if(in_array($fileActualExt, $allowedExt)){
            if($fileError == 0){
                if($fileSize < 10000000){
                    $fileNemeNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'img_perfil/'.$fileNemeNew;
                    if(move_uploaded_file($fileTempName, $fileDestination)){
                        header("location:/pmss/php/controlAplicante.php?success-{$fileName}");
                    
                    } else{
                        header("location:/pmss/php/controlAplicante.php?malote{$fileTempName}");                    
                    }
                    
                }else{
                    echo "File Size Limit beyond acceptance";
                    header("location:/pmss/php/controlAplicante.php?tamanio");
                    exit();
                }
            }else{
                echo "Something Went Wrong Please try again!";
                header("location:/pmss/php/controlAplicante.php?error=algomal");
                exit();
            }
        }else{
            echo "You can't upload this extention of file";
            header("location:/pmss/php/controlAplicante.php?extension{$fileTempName}");
            exit();
        }

        updateMig($conn, $users_id, $users_nom, $users_ape, $users_sex, $users_correo,
            $users_lang, $users_birth, $users_tele, $users_tele_whats,$users_dire, 
            $users_estancia,$users_descrip, $users_ofi1, $users_ofi1_exp, $users_ofi2,
            $users_ofi2_exp, $fileDestination);
            }

        }
    
    else{
        header("location:/pmss/php/controlAplicante.php?error=stmtfailed");
        exit();
    }
	?>