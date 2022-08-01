<nav class="navmain navbar navbar-expand-lg" style="background-color: #D1D1D1;border: 2px outset gray;">
	<div class="container-fluid">
		<a class="navbar-brand" href="/pmss/index.php">
			<h2>Agencia Migrante</h2>
		</a>
		<a class="navbar-brand" href="/pmss/assets/img/escudo_uacj.png">
			<img src="/pmss/assets/img/escudo_uacj.png" alt="UACJ" width="150px">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav" style= "position: absolute;right: 5px;z-index:2;">

                <li class="nav-item" id="signin"> 
                <button class="btn btn-primary">
					<a class="nav-link" href="/pmss/php/perfil_empleado.php">Mi Cuenta Empleado</a>
                </button>
				</li>
				<li class="nav-item" id="signin2"> 
                <button class="btn btn-primary">
					<a class="nav-link" href="/pmss/php/perfil_empleador.php">Mi Cuenta Empleador</a>
                </button>
				</li>

				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="/pmss/index.php">Inicio</a>
				</li>
				<li class="nav-item"> 
				    <button class="btn btn-primary" onclick="aviso()">
						<a class="nav-link">Registrarse</a>
					</button>
				</li>
				<li class="nav-item"> 
					<button class="btn btn-primary">
						<a class="nav-link" href="/pmss/php/login.php">Iniciar Sesión</a>
					</button>
				</li>
				<li class="nav-item"> 
					<button class="btn btn-primary">
						<a class="nav-link" href="/pmss/php/logout.php">Cerrar Sesión</a>
					</button>
				</li>
			</ul>
		</div>
	</div>
	<div class="collapse navbar-collapse" id="clock"></div>
</nav>