<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdmigrantes2.0";

    $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    };

    $check_user="SELECT * FROM empleadores WHERE correo ='{$_SESSION['userEmail']}';";

    $result = $conn->query($check_user);

    if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();

            $users_id = $row['id_emp'];
            $users_emp = $row['empresa'];
            $users_giro = $row['giro'];
            $users_correo = $row['correo'];
            $users_contra = $row['pwd'];
            $users_tele = $row['telefono'];
            $users_dire = $row['direccion'];

            $users_cont1_nom = $row['cont1_nom'];
            $users_cont1_ape = $row['cont1_ape'];
            $users_cont1_corr = $row['cont1_correo'];
            $users_cont1_hor1 = $row['cont1_hora1'];
            $users_cont1_hor2 = $row['cont1_hora2'];

            
            $users_cont2_nom = $row['cont2_nom'];
            $users_cont2_ape = $row['cont2_ape'];
            $users_cont2_corr = $row['cont2_correo'];
            $users_cont2_hor1 = $row['cont2_hora1'];
            $users_cont2_hor2 = $row['cont2_hora2'];

            $users_descrip = $row['descripcion'];

            $time1 = date('H:i', strtotime($users_cont1_hor1));
            $time2 = date('H:i', strtotime($users_cont1_hor2));
            
            $time5 = date('H:i', strtotime($users_cont2_hor1));
            $time6 = date('H:i', strtotime($users_cont2_hor2));

?>

<div class="container justify-content-center">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="signup-form">
                <form action="/pmss/assets/includes/update_empleador.inc.php" method="post" class="mt-5 border p-4 bg-light shadow">    
                    <h3 class="mb-6 text-secondary">Mi información</h3>
                    <div class="row">

                        <div class="mb-3 col-md-6">
                            <label>Nombre de la empresa o Contratador<span class="text-danger"> *</span></label>
                            <input type="text" name="empresa" class="form-control" value="<?php echo $users_emp; ?>" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Area de trabajo o Giro de la empresa<span class="text-danger"> *</span></label>
                            <!-- <input type="text" name="giro" class="form-control" placeholder="Escribe aquí el de que trata . . ." required> -->
                            <select class="form-select" name="giro" aria-label="job" required>                                        
                                <option selected><?php echo $users_giro; ?></option>
                                <option value="Comercial">Comercial</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Servicios">Servicios</option>
                                <option value="Ninguno">Ninguno</option>
                            </select>
                        </div>
                        
                        <!-- <div class="col-md-6 col-lg-6">
                            <label>Contraseña<span class="text-danger"> *</span></label>
                            <input type="password" name="pwd" class="form-control" placeholder="Escribe tu contraseña . . ." required>
                        </div>   
                        <div class="col-md-6">
                            <label>Repetir Contraseña<span class="text-danger"> *</span></label>
                            <input type="password" name="confPwd" class="form-control" placeholder="Escribe tu contraseña nuevamente . . ." required>
                        </div> -->
                        <!-- <div class="mb-2 col-md-12 form-text fw-light ms-2" id="pwdHelp">
                            Tu contraseña debe ser de entre 8 y 20 carácteres, contener letras y numeros, sin espacios ni caracteres especiales. 
                        </div> -->

                        <div class="mb-3 col-md-8">
                            <label for="email">Correo electrónico<span class="text-danger"> *</span></label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $users_correo; ?>" required>
                        </div>

                        <div class="col-md-8 mb-3">
                            <label>Dirección del domicilio o la empresa<span class="text-danger"> *</span></label>
                            <input type="text" name="address" class="form-control" value="<?php echo $users_dire; ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label>Teléfono<span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-secondary" style="--bs-bg-opacity: 0.3" id="lada">+</span>
                                <input type="tel" name="phone" id="phone" class="form-control" value="<?php echo $users_tele; ?>" minlength="9" maxlength="13" required>
                                    <span class="input-group-text d-block">
                                        <i class="fa fa-phone"></i>
                                    </span>
                            </div>
                            <p class="form-text ms-2 fw-light mb-1">Incluir LADA.</p>
                        </div>
                        <!-- Contacto #1 -->
                        <div>
                            <hr style="border: 1px solid black">
                        </div>
                        <div class="col-md-12 mb-1">
                            Contacto #1 <span class="text-danger"> *</span>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Nombre<span class="text-danger"> *</span></label>
                            <input type="text" name="cont1-nombre" class="form-control" id="namecont1" value="<?php echo $users_cont1_nom; ?>" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Apellidos<span class="text-danger"> *</span></label>
                            <input type="text" name="cont1-apellido" class="form-control" id="surncont1" value="<?php echo $users_cont1_ape; ?>" required>
                        </div>

                        <div class="mb-2 col-md-8">
                            <label for="email">Correo electrónico<span class="text-danger"> *</span></label>
                            <input type="email" name="cont1-email" id="emailcont1" class="form-control" value="<?php echo $users_cont1_corr; ?>" required>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div>
                                <label>Horario (de preferencia)</label>
                                <input class="mt-1" type="time" id="schedule" name="cont1-schdcont1" value="<?php echo $time1; ?>">
                                    <span>-</span>
                                <input class="mt-1" type="time" id="schedule" name="cont1-schdcont2" value="<?php echo $time2; ?>">
                            </div>
                            <p class="form-text fw-light mb-1">Puede teclear o dar clic en el reloj.</p>
                        </div>
                        
                        <div>
                            <hr style="border: 1px solid gray">
                        </div>
                        <!--Contacto 2-->

                        <?php
                            if($users_cont2_nom!==""){
                        ?>

                            <div class="col-md-12 mb-1">
                                Contacto #2 (si quiere agregar uno más)
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Nombre</label>
                                <input type="text" name="cont2-nombre" class="form-control" id="namecont2" value="<?php echo $users_cont2_nom; ?>">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Apellidos</label>
                                <input type="text" name="cont2-apellido" class="form-control" id="surncont2" value="<?php echo $users_cont2_ape; ?>">
                            </div>

                            <div class="mb-3 col-md-8">
                                <label for="email">Correo electrónico</label>
                                <input type="email" name="cont2-email" id="emailcont2" class="form-control" value="<?php echo $users_cont2_corr; ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                            <div>
                                    <label>Horario (de preferencia)</label>
                                    <input class="mt-1" type="time" id="schedule" name="cont2-schdcont1" value="<?php echo $time5; ?>">
                                        <span>-</span>
                                    <input class="mt-1" type="time" id="schedule" name="cont2-schdcont2" value="<?php echo $time6; ?>">
                                </div>
                                <p class="form-text fw-light mb-1">Puede teclear o dar clic en el reloj.</p>
                            </div>

                            <div>
                                <hr style="border: 1px solid black">
                            </div>

                        <?php
                            }else{
                        ?>

                            <div class="col-md-12 mb-1">
                                Contacto #2 (si quiere agregar uno más)
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Nombre</label>
                                <input type="text" name="cont2-nombre" class="form-control" id="namecont2">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Apellidos</label>
                                <input type="text" name="cont2-apellido" class="form-control" id="surncont2">
                            </div>

                            <div class="mb-3 col-md-8">
                                <label for="email">Correo electrónico</label>
                                <input type="email" name="cont2-email" id="emailcont2" class="form-control">
                            </div>
                            <div class="col-md-4 mb-3">
                            <div>
                                    <label>Horario (de preferencia)</label>
                                    <input class="mt-1" type="time" id="schedule" name="cont2-schdcont1">
                                        <span>-</span>
                                    <input class="mt-1" type="time" id="schedule" name="cont2-schdcont2">
                                </div>
                                <p class="form-text fw-light mb-1">Puede teclear o dar clic en el reloj.</p>
                            </div>

                            <div>
                                <hr style="border: 1px solid black">
                            </div>

                        <?php
                            }
                        ?>
                        <!-- contacto 2 -->

                        <div class="col-md-12 mb-4">
                            <label for="description">Descripción del trabajo o la empresa(que busca/necesita que se realice, de que trata)<span class="text-danger"> *</span></label>
                            <div class="form-floating mt-1">
                                <textarea class="form-control" name="description" maxlength="330" id="desc" style="height: 100px" required><?php echo $users_descrip; ?></textarea>
                                <label class="text-secondary" for="floatingTextarea2">Escriba aquí la descripción</label>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <p class="fs-6 text-danger">Toda la información marcada con un asterisco (*) es obligatoria.</h6>
                        </div>
                        <div class="col-md-4">
                            <button name="actualizar" class="btn btn-primary float-end"><i class="fa-solid fa-pen-to-square"></i> Actualizar</button>
                        </div>
                    </div>
                </form>
                <!-- <p class="text-center mt-3 text-secondary">Si ya tienes una cuenta, puedes iniciar sesión <a href="/pmss/php/login.php">aquí</a>.</p> -->
            </div>
        </div>
    </div>
</div>

<?php
}
else {
    echo "<h2 style='width:auto;'>Error</h2>";
}
    $conn->close();
?>