<?php include('../components/head.inc.php'); ?>
<?php include('../components/navbar.inc.php'); ?>

<div class="grid" style="--bs-gap: .25rem 1rem;--bs-columns:12;">

	<h2 style="text-align:center;width: 50%;margin: 5px auto;"><a id="subs">Iniciar Sesion</h2>
	<div style="background-color:#D1D1D1;width: 50%;margin: 5px auto;" class="align-items-center">
		<form>
			<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Correo</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Contrasenia</label>
			<input type="password" class="form-control" id="exampleInputPassword1">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>

<?php include('../components/footer.inc.php'); ?>
    </body>
</html>