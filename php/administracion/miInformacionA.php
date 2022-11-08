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

    $check_user="SELECT * FROM migrantes WHERE email ='{$_SESSION['userEmail']}';";

    $result = $conn->query($check_user);

    if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();

            $users_id = $row['id_mig'];
            $users_nom = $row['nombre'];
            $users_ape = $row['apellido'];
            $users_sex = $row['sexo'];
            $users_correo = $row['email'];
            $users_contra = $row['pwd'];
            $users_lang = $row['lengua'];
            $users_birth = $row['birthday'];
            $users_tele = $row['telefono'];
            $users_tele_whats = $row['telefono_whats'];
            $users_dire = $row['domicilio'];
            $users_ofi1 = $row['oficio1'];
            $users_ofi1_exp = $row['oficio1_exp'];
            $users_ofi2 = $row['oficio2'];
            $users_ofi2_exp = $row['oficio2_exp'];
            $users_descrip = $row['descripcion'];
            $users_estancia = $row['estancia'];
            $users_perfil = $row['dir_perfil'];

?>

<div class="container justify-content-center">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="signup-form">
                <form action="/pmss/assets/includes/update_migrante.inc.php" method="post" enctype="multipart/form-data" class="mt-5 border p-4 bg-light shadow">
                    <h3 class="mb-2 text-secondary">Mi información 
                        <input class="form-check-input" type="text" name="id-mig" value="<?php echo $users_id;?>" readonly style="display:none;">
                    </h4>
                    <div class="row">

                        <div class="mb-3 col-md-8">
                            <img src="/pmss/assets/includes/<?php echo $users_perfil;?>" alt="Smiley face" height="300px" style="float:left;border:1px solid #ddd;border-radius:4px;padding: 5px;">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="file">Cambia tu foto de perfil<span class="text-danger"> *</span></label>
                            <div>
                                <input type="file" id="img" name="file" accept="image/*" capture="camera">
                                <input type="text" name="perfil-actual" value="<?php echo $users_perfil;?>" readonly style="display:none;">
                            </div>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Nombre(s)<span class="text-danger"> *</span></label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $users_nom;?>" required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Apellidos<span class="text-danger"> *</span></label>
                            <input type="text" name="apellido" class="form-control" value="<?php echo $users_ape;?>" required>
                        </div>
                        
                        <!-- <div class="col-md-6 col-lg-6">
                            <label>Contraseña<span class="text-danger"> *</span></label>
                            <input type="password" name="pwd" class="form-control" value="<?php echo $users_id;?>" required>
                        </div>   
                        <div class="col-md-6">
                            <label>Repetir Contraseña<span class="text-danger"> *</span></label>
                            <input type="password" name="confPwd" class="form-control" placeholder="Escribe tu contraseña nuevamente . . ." required>
                        </div>
                        <div class="mb-2 col-md-12 form-text fw-light ms-2" id="pwdHelp">
                            Tu contraseña debe ser de entre 8 y 20 caracteres, contener letras y numeros, sin espacios ni caracteres especiales. 
                        </div> -->

                        <div class="mb-3 col-md-7">
                            <label for="email">Correo electrónico<span class="text-danger"> *</span></label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $users_correo;?>" required>
                        </div>
                        
                        <div class="mb-3 col-md-5">
                            <label>Sexo (Actualmente: 
                                <?php
                                    echo $users_sex;  
                                ?>    
                            )<span class="text-danger"> *</span></label>
                            <div class="hstack mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="sex1" value="Hombre" required>
                                    <label class="form-check-label" for="sex1">
                                        Hombre
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="sex" id="sex2" value="Mujer" required>
                                    <label class="form-check-label" for="sex2">
                                        Mujer
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label>¿Sabes español? (Actualmente: 
                                <?php
                                    echo $users_lang;  
                                ?>    
                            )<span class="text-danger"> *</span></label>
                            <div class="hstack mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="lang" id="lang1" value="Si" required>
                                    <label class="form-check-label" for="lang1">
                                        Si 
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="lang" id="lang2" value="No" required>
                                    <label class="form-check-label" for="lang2">
                                        No
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="lang" id="lang3" value="Al menos un poco" required>
                                    <label class="form-check-label" for="lang3">
                                        Al menos un poco
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-3">
                            <label>Fecha de nacimiento<span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <input type="date" name="birthday" class="form-control" value="<?php echo $users_birth; ?>" required>
                                    <span class="input-group-text d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                            </div>
                            <p class="form-text ms-2 fw-light mb-1">Toca para seleccionar una fecha.</p>
                        </div>

                        <div class="col-md-4">
                            <label>Telefono<span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-secondary" style="--bs-bg-opacity: 0.3" id="lada">+</span>
                                <input type="tel" name="phone" id="phone" class="form-control" value="<?php echo $users_tele; ?>"minlength="9" maxlength="13" required>
                                    <span class="input-group-text d-block">
                                        <i class="fa fa-phone"></i>
                                    </span>
                            </div>
                            <p class="form-text ms-2 fw-light mb-1">Incluir LADA.</p>
                        </div>

                        <div class="col-md-4">
                            <label>Telefono Whatsapp<span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-secondary" style="--bs-bg-opacity: 0.3" id="lada">+</span>
                                <input type="tel" name="phone2" id="phone2" class="form-control" value="<?php echo $users_tele_whats; ?>"minlength="9" maxlength="13" required>
                                    <span class="input-group-text d-block">
                                        <i class="fa fa-phone"></i>
                                    </span>
                            </div>
                            <p class="form-text ms-2 fw-light mb-1">Incluir LADA.</p>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label>Domicilio o nombre de albergue<span class="text-danger"> *</span></label>
                            <input type="text" name="address" class="form-control" value="<?php echo $users_dire; ?>" required>
                        </div>
                        
                        <div class="col-md-8 mb-3">
                            <label>Oficio, Carrera Técnica o Profesión (en el que se ha desempeñado)<span class="text-danger"> *</span></label>
                            <select class="form-select" name="oficio1" aria-label="job" required>                                        
                                <option selected value="<?php echo $users_ofi1; ?>"><?php echo $users_ofi1; ?></option>
                                <optgroup label="Oficios">
                                    <option value="Albañilería">Albañilería</option>
                                    <option value="Barbería">Barbería</option>
                                    <option value="Carpintería">Carpintería</option>
                                    <option value="Cocina">Cocina</option>
                                    <option value="Electricista">Electricista</option>
                                    <option value="Herrería">Herrería</option>
                                    <option value="Limpieza">Limpieza</option>
                                    <option value="Mecánica">Mecánica</option>
                                    <option value="Panadería">Panadería</option>
                                    <option value="Plomería">Plomería</option>
                                </optgroup>
                                <optgroup label="Licencias Técnicas">
                                    <option value="Técnico en Administración de Empresas">Técnico en Administración de Empresas</option>
                                    <option value="Técnico en Computación e Informática">Técnico en Computación e Informática</option>
                                    <option value="Técnico en Diseño Gráfico">Técnico en Diseño Gráfico</option>
                                    <option value="Técnico en Electrónica Insutrial">Técnico en Electrónica Insutrial</option>
                                    <option value="Técnico en Marketing">Técnico en Marketing</option>
                                    <option value="Técnico en Mecatrónica">Técnico en Mecatrónica</option>
                                    <option value="Técnico en Negocios Internacionales">Técnico en Negocios Internacionales</option>

                                </optgroup>
                                <optgroup label="Profesiones">
                                        <optgroup label="Ingenierías">
                                            <option value="Ing. Aeronáutica">Ing. Aeronáutica</option>
                                            <option value="Ing. Agrónomo">Ing. Agrónomo</option>
                                            <option value="Ing. Civil">Ing. Civil</option>
                                            <option value="Ing. Eléctrica">Ing. Eléctrica</option>
                                            <option value="Ing. Electrónica">Ing. Electrónica</option>
                                            <option value="Ing. Informática">Ing. Informática</option>
                                            <option value="Ing. Mecatrónica">Ing. Mecatrónica</option>
                                            <option value="Ing. Sistemas">Ing. Sistemas</option>
                                        </optgroup>
                                        <optgroup label="Licenciaturas">
                                            <option value="Lic. Administración de Empresas">Lic. Administración de Empresas</option>
                                            <option value="Lic. Comunicación">Lic. Comunicación</option>
                                            <option value="Lic. Criminología">Lic. Criminología</option>
                                            <option value="Lic. Economía">Lic. Economía</option>
                                            <option value="Lic. Educación">Lic. Educación</option>
                                            <option value="Lic. Finanazas">Lic. Finanazas</option>
                                            <option value="Lic. Médico General">Lic. Médico General</option>
                                            <option value="Lic. Turismo">Lic. Turismo</option>
                                        </optgroup>
                                </optgroup>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Experiencia del oficio<span class="text-danger"> *</span></label>
                            <select class="form-select" name="oficio1-exp" aria-label="exp1" required>
                                <option selected value="<?php echo $users_ofi1_exp; ?>"><?php echo $users_ofi1_exp; ?></option>
                                <option value="Menos de un año">Menos de un año</option>
                                <option value="2 a 5 años">2 a 5 años</option>
                                <option value="5 años o más">5 años o más</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label>Oficio, Carrera Técnica o Profesión #2</label>
                            <select class="form-select" name="oficio2" aria-label="job">                                        
                                <option selected value="<?php echo $users_ofi2; ?>"><?php echo $users_ofi2; ?></option>
                                <optgroup label="Oficios">
                                    <option value="Albañilería">Albañilería</option>
                                    <option value="Barbería">Barbería</option>
                                    <option value="Carpintería">Carpintería</option>
                                    <option value="Cocina">Cocina</option>
                                    <option value="Electricista">Electricista</option>
                                    <option value="Herrería">Herrería</option>
                                    <option value="Limpieza">Limpieza</option>
                                    <option value="Mecánica">Mecánica</option>
                                    <option value="Panadería">Panadería</option>
                                    <option value="Plomería">Plomería</option>
                                </optgroup>
                                <optgroup label="Licencias Técnicas">
                                    <option value="Técnico en Administración de Empresas">Técnico en Administración de Empresas</option>
                                    <option value="Técnico en Computación e Informática">Técnico en Computación e Informática</option>
                                    <option value="Técnico en Diseño Gráfico">Técnico en Diseño Gráfico</option>
                                    <option value="Técnico en Electrónica Insutrial">Técnico en Electrónica Insutrial</option>
                                    <option value="Técnico en Marketing">Técnico en Marketing</option>
                                    <option value="Técnico en Mecatrónica">Técnico en Mecatrónica</option>
                                    <option value="Técnico en Negocios Internacionales">Técnico en Negocios Internacionales</option>

                                </optgroup>
                                <optgroup label="Profesiones">
                                    <optgroup label="Ingenierías">
                                        <option value="Ing. Aeronáutica">Ing. Aeronáutica</option>
                                        <option value="Ing. Agrónomo">Ing. Agrónomo</option>
                                        <option value="Ing. Civil">Ing. Civil</option>
                                        <option value="Ing. Eléctrica">Ing. Eléctrica</option>
                                        <option value="Ing. Electrónica">Ing. Electrónica</option>
                                        <option value="Ing. Informática">Ing. Informática</option>
                                        <option value="Ing. Mecatrónica">Ing. Mecatrónica</option>
                                        <option value="Ing. Sistemas">Ing. Sistemas</option>
                                    </optgroup>
                                    <optgroup label="Licenciaturas">
                                        <option value="Lic. Administración de Empresas">Lic. Administración de Empresas</option>
                                        <option value="Lic. Comunicación">Lic. Comunicación</option>
                                        <option value="Lic. Criminología">Lic. Criminología</option>
                                        <option value="Lic. Economía">Lic. Economía</option>
                                        <option value="Lic. Educación">Lic. Educación</option>
                                        <option value="Lic. Finanazas">Lic. Finanazas</option>
                                        <option value="Lic. Médico General">Lic. Médico General</option>
                                        <option value="Lic. Turismo">Lic. Turismo</option>
                                    </optgroup>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Experiencia del oficio</label>
                            <select class="form-select" name="oficio2-exp" aria-label="exp1">
                                <option selected value="<?php echo $users_ofi2_exp; ?>"><?php echo $users_ofi2_exp; ?></option>
                                <option value="Menos de un año">Menos de un año</option>
                                <option value="2 a 5 años">2 a 5 años</option>
                                <option value="5 años o más">5 años o más</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-12 form-text fw-light ms-2" id="pwdHelp">
                            Puede escoger uno o dos oficios o profesiones.
                        </div>
                        
                        <div class="col-md-12 mb-4">
                            <label for="estancia">¿Cuánto tiempo estarás en la ciudad? ¿Buscas un trabajo fijo o proyectos cortos?</label>
                            <div class="form-floating mt-1">
                                <textarea class="form-control" name="estancia" maxlength="330" id="estancia" style="height:80px;"><?php echo $users_estancia; ?></textarea>
                                <label for="floatingTextarea2">Estancia</label>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="description">Descripción de ti (puede incluir otras habilidades u oficios desempeñados)</label>
                            <div class="form-floating mt-1">
                                <textarea class="form-control" name="description" maxlength="330" id="desc" style="height:80px;"><?php echo $users_descrip; ?></textarea>
                                <label for="floatingTextarea2">Descripción</label>
                            </div>
                        </div>

                        <!-- <div class="col-md-12 mb-4">
                            <label for="file">Agrega tu foto de perfil<span class="text-danger"> *</span></label>
                            <div class="col-md-8 ">
                                <input type="file" id="img" name="file" accept="image/*" capture="camera">
                                <input type="text" name="perfil-actual" value="<?php echo $users_perfil;?>" readonly style="display:none;">
                            </div>
                        </div> -->

                        <div class="col-md-8 ">
                            <p class="fs-6 text-danger">Toda la información marcada con un asterisco (*) es obligatoria.</h6>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" name="actualizar" class="btn btn-primary float-end"><i class="fa-solid fa-pen-to-square"></i> Actualizar</button>
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