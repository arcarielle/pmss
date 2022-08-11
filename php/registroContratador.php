<?php
    include_once '../components/head.inc.php';
?>
<body class="registroContratador">
    <header>
        <nav class="navbar bg-dark">
            <div class="container-fluid justify-content-start">
                <span class="navbar-brand mb-2 h1">
                    <a class="navbar-brand text-light" href="/pmss/index.php">
                        Agencia Migrante
                    </a>
                </span>
                <span class="nav-item mb-1 h6">
                <a class="nav-link active text-white-50" aria-current="page" href="/pmss/index.php">Inicio</a>
                </span>
            </div>
        </nav>
    </header>
    <div class="vh-100">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="signup-form">
                        <form action="" class="mt-5 border p-4 bg-light shadow">
                            <h3 class="mb-2 text-secondary">Crea tu cuenta para Contratar</h4>
                            <h6 class="mb-4 text-black-50">Rellena toda la información solicitada.</h2>
                            <div class="row">
                                <!-- <div class="mb-3 col-md-6 input-group">
                                    <span class="input-group-text bg-secondary" style="--bs-bg-opacity: .4">Nombre y apellido</span>
                                    <input type="text" aria-label="First name" class="form-control" placeholder="Nombres">
                                    <input type="text" aria-label="Last name" class="form-control" placeholder="Apellidos">
                                </div> -->

                                <div class="mb-3 col-md-6">
                                    <label>Nombre de la empresa<span class="text-danger"> *</span></label>
                                    <input type="text" name="nombre" class="form-control" placeholder="Escribe aqui el nombre . . ." required>
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label>Giro de la empresa<span class="text-danger"> *</span></label>
                                    <input type="text" name="apellido" class="form-control" placeholder="Escribe aqui el giro . . ." required>
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
                                    Tu contraseña debe ser de entre 8 y 20 caracteres, contener letras y numeros, sin espacios ni caracteres especiales. 
                                </div>

                                <div class="col-md-9 mb-3">
                                    <label>Domicilio de la empresa<span class="text-danger"> *</span></label>
                                    <input type="text" name="address" class="form-control" placeholder="Escribe tu dirección . . ." required>
                                </div>
                                <div class="col-md-3">
                                    <label>Telefono<span class="text-danger"> *</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary" style="--bs-bg-opacity: 0.3" id="lada">+</span>
                                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Número" minlength="9" maxlength="12" required>
                                            <span class="input-group-text d-block">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                    </div>
                                    <p class="form-text ms-2 fw-light mb-1">Incluir LADA.</p>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label>Oficio (en el que se ha desempeñado)<span class="text-danger"> *</span></label>
                                    <select class="form-select" aria-label="job" required>                                        
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
                                <div class="col-md-6 mb-3">
                                    <label>Experiencia del oficio<span class="text-danger"> *</span></label>
                                    <select class="form-select" aria-label="exp1" required>
                                        <option selected disabled>Abre este menu de selección</option>
                                        <option value="1 o menos">Menos de un año</option>
                                        <option value="2 a 5">2 a 5 años</option>
                                        <option value="5 o mas">5 años o más</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Oficio (en el que se ha desempeñado)</label>
                                    <select class="form-select" aria-label="job" required>                                        
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
                                <div class="col-md-6">
                                    <label>Experiencia del oficio</label>
                                    <select class="form-select" aria-label="exp1" required>
                                        <option selected disabled>Abre este menu de selección</option>
                                        <option value="1 o menos">Menos de un año</option>
                                        <option value="2 a 5">2 a 5 años</option>
                                        <option value="5 o mas">5 años o más</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-12 form-text fw-light ms-2" id="pwdHelp">
                                    Puede escoger más de un oficio.
                                </div>
                                
                                <div class="col-md-12 mb-4">
                                    <label for="description">Descripción de la empresa(puede incluir otras habilidades u oficios desempeñados)</label>
                                    <div class="form-floating mt-1">
                                        <textarea class="form-control" maxlength="330" placeholder="Pon tu descripción aquí" id="desc" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Descripción</label>
                                    </div>
                                </div>

                                <div class="col-md-8 ">
                                    <p class="fs-6 text-danger">Toda la información marcada con un asterisco (*) es obligatoria.</h6>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary float-end">Registrarse</button>
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