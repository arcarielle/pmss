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

    ?>

    <div class="container justify-content-center py-2">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="signup-form">
    <?php

    $check_user="SELECT * FROM proyectos_empleadores WHERE id_empresa ='{$_SESSION['userid']}';";

    $result = $conn->query($check_user);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {

            $users_proyecto_id = $row['id_proyecto'];
            $users_ofi = $row['oficio'];
            $users_exp = $row['experiencia'];
            $users_sex = $row['sexo'];
            $users_hora1 = $row['hora1'];
            $users_hora2 = $row['hora2'];
            $users_lengua = $row['lengua'];
            $users_tipo = $row['tipo'];
            $users_sueldo = $row['sueldo'];
            $users_descrip = $row['descripcion'];
            $users_estancia = $row['disponibilidad'];

            $time1 = date('H:i', strtotime($users_hora1));
            $time2 = date('H:i', strtotime($users_hora2));
            
?>

<!-- <div class="col-md-10 offset-md-1"> -->
    <!-- <div class="signup-form"> -->
        <form action="/pmss/assets/includes/updateProject.inc.php" method="post" class="mt-5 border p-4 bg-light shadow">
            <h4 class="mb-2 text-secondary">Proyecto Id: 
                <input class="form-check-input" type="text" name="id-proyecto" value="<?php echo $users_proyecto_id;?>" readonly>
            </h4>
            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label>Oficio<span class="text-danger"> *</span></label>
                    <select class="form-select" name="oficio" aria-label="job" required>                                        
                            <option value="<?php echo $users_ofi;?>" selected><?php echo $users_ofi; ?></option>
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

                <div class="col-md-6 mb-3">
                    <label>Experiencia del oficio<span class="text-danger"> *</span></label>
                    <select class="form-select" name="experiencia" aria-label="exp1" required>
                        <option value="<?php echo $users_exp;?>" selected><?php echo $users_exp; ?></option>
                        <option value="Sin importar">Sin importar</option>
                        <option value="1 año o menos">1 año o menos</option>
                        <option value="1 a 2 años">1 a 2 años</option>
                        <option value="2 a 5 años">2 a 5 años</option>
                        <option value="5 años o más">5 años o más</option>
                    </select>
                </div>

                <div class="mb-3 col-md-4">
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
                        <div class="form-check ms-3">
                            <input class="form-check-input" type="radio" name="sex" id="sex3" value="No importa" required>
                            <label class="form-check-label" for="sex3">
                                No importa
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-1">
                    <div>
                        <label>Horario</label><span class="text-danger"> *</span></br>
                        <input class="mt-1" type="time" id="schedule" name="schdcont1" value="<?php echo $time1; ?>">
                        <span>-</span>
                        <input class="mt-1" type="time" id="schedule" name="schdcont2" value="<?php echo $time2; ?>">
                    </div>
                    <p class="form-text fw-light mb-1">Puede teclear o dar clic en el reloj.</p>
                </div>

                <div class="col-md-5">
                    <label>Conocimiento de Español (Actualmente: 
                        <?php
                            echo $users_lengua;  
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

                <div class="mb-5 col-md-7">
                    <label>Tipo de Trabajo (Actualmente:    
                        <?php
                            echo $users_tipo;  
                        ?>   
                    )<span class="text-danger"> *</span></label>
                    <div class="hstack mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo" value="Un solo trabajo" id="deter" required>
                            <label class="form-check-label" for="deter">
                                Un sólo trabajo
                            </label>
                        </div>
                        <div class="form-check ms-3">
                            <input class="form-check-input" type="radio" name="tipo" value="Contrato Semanal" id="indeter" required>
                            <label class="form-check-label" for="indeter">
                                Contrato Semanal (pago por semana)
                            </label>
                        </div>
                        <div class="form-check ms-3">
                            <input class="form-check-input" type="radio" name="tipo" value="Contrato Diario" id="indeter" required>
                            <label class="form-check-label" for="indeter">
                                Contrato diario (pago por día)
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <label>Sueldo o Pago (Según Aptitudes)<span class="text-danger"> *</span></label>
                    <div class="input-group">
                        <span class="input-group-text bg-secondary" style="--bs-bg-opacity: 0.3" id="dinero">$</span>
                        <input type="number" name="sueldo" class="form-control" value="<?php echo $users_sueldo; ?>" required>
                            <span class="input-group-text d-block">
                                <i class="fa-solid fa-money-check-dollar"></i>
                            </span>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <label for="disponibilidad">¿Qué días de la semana es el trabajo?<span class="text-danger"> *</span></label>
                    <div class="form-floating mt-1">
                        <textarea class="form-control" name="disponibilidad" maxlength="330" placeholder="Disponibilidad" id="avail" style="height: 60px"><?php echo $users_estancia; ?></textarea>
                        <label for="floatingTextarea">El trabajo es los días...</label>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <label for="description">Descripción del oficio (que necesita, que es lo que realizará, etc)<span class="text-danger"> *</span></label>
                    <div class="form-floating mt-1">
                        <textarea class="form-control" name="description" maxlength="330" id="desc" style="height: 100px"><?php echo $users_descrip; ?></textarea>
                        <label for="floatingTextarea2">Descripción</label>
                    </div>
                </div>

                <div class="col-md-8 ">
                    <p class="fs-6 text-danger">Toda la información marcada con un asterisco (*) es obligatoria.</h6>
                </div>
                <div class="col-md-4">
                    <button type="submit" name="actualizar" class="btn btn-success">Actualizar</button>
                    <button type="submit" name="eliminar" class="btn btn-success float-end">Eliminar</button>
                </div>
            </div>
        </form>
    <!-- </div> -->
<!-- </div> -->


<?php
}}
else {
    echo "<h2 style='width:auto;'>No hay proyectos</h2>";
}
    $conn->close();
?>
            </div>
        </div>
    </div>
</div>