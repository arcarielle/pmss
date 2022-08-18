<div class="container justify-content-center">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="signup-form">
                <form action="" class="mt-5 border p-4 bg-light shadow">
                    <h3 class="mb-2 text-secondary">Crea un empleo para publicar</h4>
                    <h6 class="mb-4 text-black-50">Rellena toda la información solicitada.</h2>
                    <div class="row">

                        <div class="mb-3 col-md-6">
                            <label>Oficio<span class="text-danger"> *</span></label>
                            <input type="text" name="nombre" class="form-control" placeholder="Escribe el nombre del puesto o trabajo . . ." required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Experiencia del oficio<span class="text-danger"> *</span></label>
                            <select class="form-select" aria-label="exp1" required>
                                <option selected disabled>Abre este menu de selección</option>
                                <option value="Sin importar">Sin importar</option>
                                <option value="1 o menos">1 año o menos</option>
                                <option value="1 a 2">1 a 2 años</option>
                                <option value="2 a 5">2 a 5 años</option>
                                <option value="5 o mas">5 años o más</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-3">
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

                        <div class="col-md-4 mb-1">
                            <div>
                                <label>Horario</label><span class="text-danger"> *</span>
                                <input class="mt-1" type="time" id="schedule" name="schdcont1" min="09:00" max="18:00">
                            </div>
                            <p class="form-text fw-light mb-1">Puede teclear o dar clic en el reloj.</p>
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
                        </div>

                        <div class="col-md-6 mb-4">
                            <label>Sueldo<span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-secondary" style="--bs-bg-opacity: 0.3" id="dinero">$</span>
                                <input type="number" name="sueldo" id="phone" class="form-control" placeholder="Cantidad" required>
                                    <span class="input-group-text d-block">
                                        <i class="fa-solid fa-money-check-dollar"></i>
                                    </span>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="description">Descripción del oficio (que necesita, que es lo que realizará, etc)<span class="text-danger"> *</span></label>
                            <div class="form-floating mt-1">
                                <textarea class="form-control" maxlength="330" placeholder="Pon tu descripción aquí" id="desc" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Descripción</label>
                            </div>
                        </div>

                        <div class="col-md-8 ">
                            <p class="fs-6 text-danger">Toda la información marcada con un asterisco (*) es obligatoria.</h6>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary float-end">Crear</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">Si ya tienes una cuenta, puedes iniciar sesión <a href="/pmss/php/login.php">aquí</a>.</p>
            </div>
        </div>
    </div>
</div>