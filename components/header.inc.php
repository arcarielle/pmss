<header>
    <nav class="navbar navbar-expand-lg py-3 bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand w-25" href="/pmss/index.php">
                <img class="img-fluid" src="/pmss/assets/img/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active text-white" aria-current="page" href="/pmss/index.php"><i class="fa-solid fa-house"></i> Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white-50" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ofertas
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/pmss/php/ofertasEmpleo.php">
                                    <i class="fa-solid fa-suitcase"></i> Empleos
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="/pmss/php/perfilesAplicantes.php">
                                    <i class="fa-solid fa-address-book"></i> Perfiles Aplicantes
                                </a>
                            </li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Something else here
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled text-white-50">
                            Deshabilitao
                        </a>
                    </li> -->
                </ul>
                <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                {
                ?>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-secondary text-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Perfil
                        </button>
                        <ul class="dropdown-menu bg-secondary">
                            <li><a class="dropdown-item" href="#">Mi Información</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                <?php 
                }
                else{ ?>
                    <div class="btn-group" role="group" aria-label="register-login">
                        <button type="button" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#selRegistro">
                            <i class="fa-solid fa-pen-to-square"></i> Registrarse
                        </button>
                        <button type="button" class="btn btn-success" onclick="location.href='/pmss/php/inicioSesion.php'">
                            Iniciar Sesión <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        </button>
                    </div>
                <?php } 
                ?>
                <div class="modal fade" id="selRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h4 class="modal-title text-light" id="exampleModalLabel"><i class="fa-solid fa-pen-to-square"></i> Registro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="fs-5">
                                    Antes de que continúes necesitamos que nos hagas saber si estás buscando empleo o quieres contratar a posibles aplicantes,
                                    para eso, da clic en el botón que se ajuste a tu necesidad.
                                </p>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" onclick="location.href='/pmss/php/registroAplicante.php'"><i class="fa-solid fa-suitcase"></i> Quiero aplicar a empleos</button>
                                <button type="button" class="btn btn-success" onclick="location.href='/pmss/php/registroContratador.php'"><i class="fa-solid fa-chalkboard-user"></i> Quiero contratar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success">
                        
                    </button>
                </form> -->
            </div>
        </div>
    </nav>
</header>