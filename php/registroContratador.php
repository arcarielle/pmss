<?php
    include_once '../components/head.inc.php';
?>
<body class="registroContratador">
    <?php
        include_once '../components/headerreg.inc.php';
    ?>
    <div class="vh-100">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="signup-form">
                        <form action="/pmss/assets/includes/signup_empleador.inc.php" method="post" class="mt-5 border p-4 bg-light shadow">    
                            <h3 class="mb-2 text-secondary">Crea tu cuenta para Contratar</h4>
                            <?php
                                if(isset($_GET["error"])){
                                    if($_GET["error"] == "stmtfailed"){
                                        echo "<h2 class='fs-12 text-danger'>Algo salió mal</h2>";
                                    }
                                    else if($_GET["error"] == "pwdsdontmatch"){
                                        echo "<h2 class='fs-12 text-danger'>Contraseñas no coinciden</h2>";
                                    }
                                    else if($_GET["error"] == "alrdyexists"){
                                        echo "<h2 class='fs-12 text-danger'>Ya existe una cuenta con este correo</h2>";
                                    }
                                    else if($_GET["error"] == "none"){
                                        echo "<h2 class='fs-12 text-success'>Registro exitoso, inicia sesión volviendo al inicio</h2>";
                                    }
                                }
                             ?>
                            <h6 class="mb-4 text-black-50">Rellena toda la información solicitada.</h2>
                            <div class="row">
                                <!-- <div class="mb-3 col-md-6 input-group">
                                    <span class="input-group-text bg-secondary" style="--bs-bg-opacity: .4">Nombre y apellido</span>
                                    <input type="text" aria-label="First name" class="form-control" placeholder="Nombres">
                                    <input type="text" aria-label="Last name" class="form-control" placeholder="Apellidos">
                                </div> -->

                                <div class="mb-3 col-md-6">
                                    <label>Nombre de la empresa o Contratador<span class="text-danger"> *</span></label>
                                    <input type="text" name="empresa" class="form-control" placeholder="Escribe aquí el nombre . . ." required>
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label>Area de trabajo o Giro de la empresa<span class="text-danger"> *</span></label>
                                    <!-- <input type="text" name="giro" class="form-control" placeholder="Escribe aquí el de que trata . . ." required> -->
                                    <select class="form-select" name="giro" aria-label="job" required>                                        
                                        <option selected disabled>Abre este menu de selección</option>
                                        <option value="Albañilería">Albañilería</option>
                                        <option value="Recepcionista">Recepcionista</option>
                                        <option value="Barbería">Barbería</option>
                                        <option value="Plomería">Plomería</option>
                                        <option value="Electricista">Electricista</option>
                                        <option value="Mecánica">Mecánica</option>
                                        <option value="Limpieza">Limpieza</option>
                                        <option value="Herrería">Herrería</option>
                                        <option value="Carpintería">Carpintería</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6 col-lg-6">
                                    <label>Contraseña<span class="text-danger"> *</span></label>
                                    <input type="password" name="pwd" class="form-control" placeholder="Escribe tu contraseña . . ." required>
                                </div>   
                                <div class="col-md-6">
                                    <label>Repetir Contraseña<span class="text-danger"> *</span></label>
                                    <input type="password" name="confPwd" class="form-control" placeholder="Escribe tu contraseña nuevamente . . ." required>
                                </div>
                                <div class="mb-2 col-md-12 form-text fw-light ms-2" id="pwdHelp">
                                    Tu contraseña debe ser de entre 8 y 20 carácteres, contener letras y numeros, sin espacios ni caracteres especiales. 
                                </div>

                                <div class="mb-3 col-md-8">
                                    <label for="email">Correo electrónico<span class="text-danger"> *</span></label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Escribe tu correo . . ." required>
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label>Dirección del domicilio o la empresa<span class="text-danger"> *</span></label>
                                    <input type="text" name="address" class="form-control" placeholder="Escribe aquí la dirección . . ." required>
                                </div>
                                <div class="col-md-4">
                                    <label>Teléfono<span class="text-danger"> *</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary" style="--bs-bg-opacity: 0.3" id="lada">+</span>
                                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Número" minlength="9" maxlength="13" required>
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
                                    <input type="text" name="cont1-nombre" class="form-control" id="namecont1" placeholder="Escribe el nombre (o nombres) . . ." required>
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label>Apellidos<span class="text-danger"> *</span></label>
                                    <input type="text" name="cont1-apellido" class="form-control" id="surncont1" placeholder="Escribe los apellidos (o único apellido) . . ." required>
                                </div>

                                <div class="mb-2 col-md-8">
                                    <label for="email">Correo electrónico<span class="text-danger"> *</span></label>
                                    <input type="email" name="cont1-email" id="emailcont1" class="form-control" placeholder="Escribe el correo . . ." required>
                                </div>
                                <div class="col-md-4 mb-1">
                                    <div>
                                        <label>Horario (de preferencia)</label>
                                        <input class="mt-1" type="time" id="schedule" name="cont1-schdcont1">
                                            <span>-</span>
                                        <input class="mt-1" type="time" id="schedule" name="cont1-schdcont2">
                                    </div>
                                    <p class="form-text fw-light mb-1">Puede teclear o dar clic en el reloj.</p>
                                </div>
                                
                                <div>
                                    <hr style="border: 1px solid gray">
                                </div>
                                <!--Contacto 2-->
                                <div class="col-md-12 mb-1">
                                    Contacto #2 (si quiere agregar uno más)
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Nombre</label>
                                    <input type="text" name="cont2-nombre" class="form-control" id="namecont2" placeholder="Escribe el nombre (o nombres) . . .">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label>Apellidos</label>
                                    <input type="text" name="cont2-apellido" class="form-control" id="surncont2" placeholder="Escribe los apellidos (o único apellido) . . .">
                                </div>

                                <div class="mb-3 col-md-8">
                                    <label for="email">Correo electrónico</label>
                                    <input type="email" name="cont2-email" id="emailcont2" class="form-control" placeholder="Escribe el correo . . .">
                                </div>
                                <div class="col-md-4 mb-3">
                                <div>
                                        <label>Horario (de preferencia)</label>
                                        <input class="mt-1" type="time" id="schedule" name="cont2-schdcont1" min="09:00" max="18:00">
                                            <span>-</span>
                                        <input class="mt-1" type="time" id="schedule" name="cont2-schdcont2" min="09:00" max="18:00">
                                    </div>
                                    <p class="form-text fw-light mb-1">Puede teclear o dar clic en el reloj.</p>
                                </div>

                                <div>
                                    <hr style="border: 1px solid black">
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="description">Descripción del trabajo o la empresa(que busca/necesita que se realice, de que trata)<span class="text-danger"> *</span></label>
                                    <div class="form-floating mt-1">
                                        <textarea class="form-control" name="description" maxlength="330" placeholder="Pon tu descripción aquí" id="desc" style="height: 100px" required></textarea>
                                        <label class="text-secondary" for="floatingTextarea2">Escriba aquí la descripción</label>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <p class="fs-6 text-danger">Toda la información marcada con un asterisco (*) es obligatoria.</h6>
                                </div>
                                <div class="col-md-4">
                                    <button name="registrarse" class="btn btn-primary float-end"><i class="fa-solid fa-pen-to-square"></i> Registrarse</button>
                                </div>
                            </div>
                        </form>
                        <p class="text-center mt-3 text-secondary">Si ya tienes una cuenta, puedes iniciar sesión <a href="/pmss/php/login.php">aquí</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>