<?php include('../components/head.inc.php'); ?>
<?php include('../components/navbar.inc.php'); ?>
<?php include('../components/btnhandler.inc.php'); ?>

<div class="grid" style="--bs-gap: .25rem 1rem;--bs-columns:12;">

	<h2 style="text-align:center;width: 50%;margin: 5px auto;"><a id="subs">Iniciar Sesion</h2>
	<div style="background-color:#D1D1D1;width: 50%;margin: 5px auto;" class="align-items-center">
		<form role="form" method="post" action="./login.php">
			<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Correo</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Contrasenia</label>
			<input type="password" name="pass" class="form-control" id="exampleInputPassword1">
			</div>
			<button type="submit" name="login"class="btn btn-primary">Iniciar Sesion</button>
		</form>
</div>

<?php include('../components/footer.inc.php'); ?>

<?php  
	
	require('../components/dbconn.inc.php');  

	if(isset($_POST['login']))  
	{  
		$user_email=$_POST['email'];  
		$user_pass=$_POST['pass'];  
	
		$check_user="SELECT * FROM `empleados` WHERE Correo ='{$user_email}'AND Contra='{$user_pass}'";
		$run=mysqli_query($conn,$check_user);  
	
		if(mysqli_num_rows($run))  
		{  
			echo "<script>window.open('perfil_empleado.php','_self')</script>";  

			$_SESSION["estado"] = 'empleado';
			$_SESSION['email']=$user_email;
		} 
		else  
		{  
			$check_user="SELECT * FROM `empleadores` WHERE Correo ='{$user_email}'AND Contra='{$user_pass}'";
			$run=mysqli_query($conn,$check_user);  
		
			if(mysqli_num_rows($run))  
			{  
				echo "<script>window.open('perfil_empleador.php','_self')</script>";  
		
				$_SESSION["estado"] = 'empleador';
				$_SESSION['email']=$user_email; 
			} 
			else  
			{  
			echo "<script>alert('Correo o contraseña incorrectos!')</script>";  
			}	
		}  
	}  
?>  