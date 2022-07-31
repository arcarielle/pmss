<?php include('../components/headreg.inc.php'); ?>

<body onload="hide('zoom')">
<div class=”container”>
	<?php include('../components/navbar.inc.php'); ?>
    <?php include('../components/btnhandler.inc.php'); ?>

        <div id="zoom" class="zoom" style="position:absolute;border:3px solid #73AD21;left: 20px;right:20px;background-color:#D1D1D1;z-index:1;font-size: 20px;">  
            <span id="span_muestra"></span>
            <button onclick="hide('zoom')" class="btn btn-primary">Cerrar</button>
        </div>

        <h2 style="text-align:center;margin:5px;"><a id="subs">Ofertas para Empresas (Busco Contratar)</h2>

        <FORM METHOD="POST" ACTION="ofertas.php">

        <div class="container" id="main_container">
        <?php
            $users_of = $_POST['oficio'];
            $users_exp = $_POST['experiencia'];

            require('../components/dbconn.inc.php');

            if($users_of != 'Oficio' && $users_exp != 'Experiencia'){
                $sql="SELECT * FROM `empleados` WHERE Oficio = '{$users_of}' and Experiencia = '{$users_exp}';";
            }
            elseif($users_of != 'Oficio'){
                $sql="SELECT * FROM `empleados` WHERE Oficio = '{$users_of}';";
            }
            elseif($users_exp != 'Experiencia'){
                $sql="SELECT * FROM `empleados` WHERE Experiencia = '{$users_exp}';";}
            else{
                $sql="SELECT * FROM `empleados`;";
            }

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {

                    $x= rand(1, 6);
			?>

				<div class="elem" id="<?php echo $row["id"];?>" onclick="show_zoom()">
					<p class="<?php echo $row["id"];?>">
						<img class="<?php echo $row["id"];?>" src='/pmss/assets/img/php/pere<?php echo $x;?>.JPG'/> 
						<span id="id" class="<?php echo $row["id"];?>">Id: <?php echo $row["id"];?> </span>
						</br><span class="<?php echo $row["id"];?>">Nombre: <?php echo $row["Nombre"];?></span>
						</br><span class="<?php echo $row["id"];?>">Apellido: <?php echo $row["Apellido"];?></span>
						</br><span class="<?php echo $row["id"];?>">Oficio: <?php echo $row["Oficio"];?></span>
						</br><span class="<?php echo $row["id"];?>">Experiencia: <?php echo $row["Experiencia"];?></span>
						</br><span class="<?php echo $row["id"];?>">Correo: <?php echo $row["Correo"];?></span>
						</br><span class="<?php echo $row["id"];?>">Contra: <?php echo $row["Contra"];?></span>
						</br><span class="<?php echo $row["id"];?>">Telefono: <?php echo $row["Telefono"];?></span>
						</br><span class="<?php echo $row["id"];?>">Direccion: <?php echo $row["Direccion"];?></span>
						</br><span class="<?php echo $row["id"];?>">Sexo: <?php echo $row["Sexo"];?></span>
						</br><span class="<?php echo $row["id"];?>">Descripcion: <?php echo $row["Descripcion"];?></span>
					</p>
				</div>
			
			<?php
				}
			}
        else {
            echo "0 users";
        }

            $conn->close();
            ?>
            </div>

             <input type="submit" value="Volver al menu" name="volver">
        </FORM> 
    </div>

		<?php include('../components/footer.inc.php'); ?>