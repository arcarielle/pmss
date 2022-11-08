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
        $users_tele_whats = $_POST['phone2'];
        $users_dire = $_POST['address'];
        $users_ofi1 = $_POST['oficio1'];
        $users_ofi1_exp = $_POST['oficio1-exp'];
        $users_ofi2 = $_POST['oficio2'];
        $users_ofi2_exp = $_POST['oficio2-exp'];
        $users_descrip = $_POST['description'];
        $users_estancia = $_POST['estancia'];

    //Taking the files from input
    $file = $_FILES['file'];
    //Getting the file name of the uploaded file
    $fileName = $_FILES['file']['name'];
    //Getting the Temporary file name of the uploaded file
    $fileTempName = $_FILES['file']['tmp_name'];
    //Getting the file size of the uploaded file
    $fileSize = $_FILES['file']['size'];
    //getting the no. of error in uploading the file
    $fileError = $_FILES['file']['error'];
    //Getting the file type of the uploaded file
    $fileType = $_FILES['file']['type'];

    //Getting the file ext
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    //Array of Allowed file type
    $allowedExt = array('jpg','jpeg','png','pdf');

    //Checking, Is file extentation is in allowed extentation array
    if(in_array($fileActualExt, $allowedExt)){
        //Checking, Is there any file error
        if($fileError == 0){
            //Checking,The file size is bellow than the allowed file size
            if($fileSize < 10000000){
                //Creating a unique name for file
                $fileNemeNew = uniqid('',true).".".$fileActualExt;
                //File destination
                $fileDestination = 'img_perfil/'.$fileNemeNew;
                //function to move temp location to permanent location
                if(move_uploaded_file($fileTempName, $fileDestination)){
                    header("location:/pmss/php/registroAplicante.php?success-{$fileDestination}");
                
                } else{
                    header("location:/pmss/php/registroAplicante.php?malote{$fileDestination}");
                
                }
                // copy($fileTempName, $fileDestination);
                
            }else{
                //Message,If file size greater than allowed size
                echo "File Size Limit beyond acceptance";
                header("location:/pmss/php/registroAplicante.php?error=stmtfailed");
                exit();
            }
        }else{
            //Message, If there is some error
            echo "Something Went Wrong Please try again!";
            header("location:/pmss/php/registroAplicante.php?error=stmtfailed");
            exit();
        }
    }else{
        //Message,If this is not a valid file type
        echo "You can't upload this extention of file";
        header("location:/pmss/php/registroAplicante.php?error=stmtfailed");
        exit();
    }


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
            $users_contra, $users_lang, $users_birth, $users_tele, $users_tele_whats, $users_dire, $users_descrip,
            $users_ofi1, $users_ofi1_exp, $users_ofi2, $users_ofi2_exp, $users_estancia, $fileDestination);
        }
    
    else{
        header("location:/pmss/php/registroAplicante.php?error=stmtfailed");
        exit();
    }
	?>