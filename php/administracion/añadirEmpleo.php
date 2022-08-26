<div class="container justify-content-center py-2">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="signup-form">
                <form action="/pmss/assets/includes/addProject.inc.php" method="post" class="mt-5 border p-4 bg-light shadow">
                    <h3 class="mb-2 text-secondary">Crea un empleo para publicar</h4>
                    
                    <h6 class="mb-4 text-black-50">Rellena toda la información solicitada.</h2>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label>Oficio, Carrera Técnica o<span class="text-danger"> *</span></label>
                                <select class="form-select" name="oficio" aria-label="job" required> 
                                    <option selected disabled>Abre este menu de selección</option>                                       
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
                                <option selected disabled>Abre este menu de selección</option>
                                <option value="Sin importar">Sin importar</option>
                                <option value="1 año o menos">1 año o menos</option>
                                <option value="1 a 2 años">1 a 2 años</option>
                                <option value="2 a 5 años">2 a 5 años</option>
                                <option value="5 años o más">5 años o más</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-4">
                            <label>Sexo<span class="text-danger"> *</span></label>
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
                                <input class="mt-1" type="time" id="schedule" name="schdcont1" >
                                <span>-</span>
                                <input class="mt-1" type="time" id="schedule" name="schdcont2" >
                            </div>
                            <p class="form-text fw-light mb-1">Puede teclear o dar clic en el reloj.</p>
                        </div>

                        <div class="col-md-4">
                            <label>¿Debe saber español?<span class="text-danger"> *</span></label>
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

                        <div class="mb-5 col-md-5">
                            <label>Tipo de Trabajo<span class="text-danger"> *</span></label>
                            <div class="hstack mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo" value="Determiando" id="deter" required>
                                    <label class="form-check-label" for="deter">
                                        Contrato por Obra
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="radio" name="tipo" value="Indetermiando" id="indeter" required>
                                    <label class="form-check-label" for="indeter">
                                        Contrato Indeterminado (Semanal)
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label>Sueldo (Según Aptitudes)<span class="text-danger"> *</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-secondary" style="--bs-bg-opacity: 0.3" id="dinero">$</span>
                                <input type="number" name="sueldo" class="form-control" placeholder="Cantidad" required>
                                    <span class="input-group-text d-block">
                                        <i class="fa-solid fa-money-check-dollar"></i>
                                    </span>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="description">Descripción del oficio (que necesita, que es lo que realizará, etc)<span class="text-danger"> *</span></label>
                            <div class="form-floating mt-1">
                                <textarea class="form-control" name="description" maxlength="330" placeholder="Pon tu descripción aquí" id="desc" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Descripción</label>
                            </div>
                        </div>

                        <div class="col-md-8 ">
                            <p class="fs-6 text-danger">Toda la información marcada con un asterisco (*) es obligatoria.</h6>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" name="crear" class="btn btn-success float-end">Crear</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">Si quieres modificar o eliminar uno, regresa <a href="#administracion">aquí</a>.</p>
            </div>
        </div>
    </div>
</div>