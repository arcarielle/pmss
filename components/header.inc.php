<header>
    <nav class="navbar navbar-expand-lg py-3 bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/pmss/index.php">
                Impulso Migrante
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active text-white-50" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white-50" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ofertas
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Empleos
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Aplicantes
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
                        <button type="button" class="btn btn-outline-success" onclick="location.href='/pmss/php/registroAplicante.php'">
                            Registrarse
                        </button>
                        <button type="button" class="btn btn-success" onclick="location.href='/pmss/php/registroAplicante.php'">
                            Iniciar Sesión
                        </button>
                    </div>
                <?php } 
                ?>
                
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success">
                        
                    </button>
                </form> -->
            </div>
        </div>
    </nav>
</header>