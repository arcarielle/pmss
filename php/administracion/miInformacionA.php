<div class="container justify-content-center">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="signup-form">
                <form action="" class="mt-5 border p-4 bg-light shadow">
                    <h3 class="mb-2 text-secondary">Modifica tu información aquí</h4>
                    <h6 class="mb-4 text-black-50">Rellena toda la información solicitada.</h2>
                    <div class="row">

                        <div class="mb-3 col-md-6">
                            <label>Nombre(s)<span class="text-danger"> *</span></label>
                            <input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre (o nombres) . . ." required>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Apellidos<span class="text-danger"> *</span></label>
                            <input type="text" name="apellido" class="form-control" placeholder="Escribe tus apellidos (o unico apellido) . . ." required>
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

                        <!-- <div class="col-md-12" id="pwdHelp">
                            <p class="ms-2">
                                <small class="fw-lighter lh-sm text-black-50">
                                    Tu contraseña debe contener por lo menos un numero y un signo para ser más segura
                                </small>
                            </p>
                        </div> -->

                        <div class="mb-3 col-md-8">
                            <label for="email">Correo electrónico<span class="text-danger"> *</span></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Escribe tu correo . . ." required>
                        </div>
                        <!-- <div class="mb-3 col-md-5">
                            <label>Sexo<span class="text-danger"> *</span></label>
                            <input type="password" name="confPwd" class="form-control" placeholder="Escribir contraseña nuevamente">
                        </div> -->
                        <div class="mb-3 col-md-4">
                            <label>Sexo<span class="text-danger"> *</span></label>
                            <div class="hstack mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="sex1" required>
                                    <label class="form-check-label" for="sex1">
                                        Hombre
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="sex" id="sex2" required>
                                    <label class="form-check-label" for="sex2">
                                        Mujer
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label>Conocimiento de Español<span class="text-danger"> *</span></label>
                            <div class="hstack mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="lang" id="lang1" required>
                                    <label class="form-check-label" for="lang1">
                                        Nada
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="lang" id="lang2" required>
                                    <label class="form-check-label" for="lang2">
                                        Poco
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="lang" id="lang3" required>
                                    <label class="form-check-label" for="lang3">
                                        Regular
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="lang" id="lang4" required>
                                    <label class="form-check-label" for="lang4">
                                        Muy bueno
                                    </label>
                                </div>
                            </div>
                            <!-- <div class="btn-group btn-group-toggle" role="group" aria-label="lenguaje">
                                <button type="button" class="btn btn-secondary">Nada</button>
                                <button type="button" class="btn btn-secondary">Poco</button>
                                <button type="button" class="btn btn-secondary">Regular</button>
                                <button type="button" class="btn btn-secondary">Muy bueno</button>
                            </div> -->
                        </div>
                        <div class="col-md-4">
                            <label>Fecha de nacimiento<span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <input type="date" name="birthday" class="form-control" placeholder="Toca para ver calendario" required>
                                    <span class="input-group-text d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                            </div>
                            <p class="form-text ms-2 fw-light mb-1">Toca para seleccionar una fecha.</p>
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
                        
                        <div class="col-md-12 mb-3">
                            <label>Domicilio o nombre de albergue<span class="text-danger"> *</span></label>
                            <input type="text" name="address" class="form-control" placeholder="Escribe tu direccion . . ." required>
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
                            <label for="description">Descripción de ti (puede incluir otras habilidades u oficios desempeñados)</label>
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