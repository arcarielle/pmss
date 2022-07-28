<?php include('../components/headreg.inc.php'); ?>

<body onload="hide('zoom')">
	<?php include('../components/navbar.inc.php'); ?>

        <div id="zoom" class="zoom" style="position:absolute;border:3px solid #73AD21;left: 20px;right:20px;background-color:#D1D1D1;z-index:1;font-size: 20px;">  
            <span id="span_muestra"></span>
            <button onclick="hide('zoom')" class="btn btn-primary">Cerrar</button>
        </div>

        <h2 style="text-align:center;margin:5px;"><a id="subs">Ofertas de Empleados (Busco Contratar)</h2>

        <FORM METHOD="POST" ACTION="ofertas.php">

        <div class="flex-container" id="main_container">
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

            while($row = $result->fetch_assoc()) {
					echo "<div class='elem' id='".$row["id"]."' onclick='show_zoom()'>
                    <p class='".$row["id"]."'>
					<img class='".$row["id"]."' src='fotos/pere1.JPG'/> 
					<span>Id:<span id='id' class='".$row["id"]."'>". $row["id"]. 
					" </span></span></br><span>Nombre:<span id= 'nombre' class='".$row["id"]."' >". $row["Nombre"]. 
					" </span></span></br><span>Apeliido:<span id ='apellido' class='".$row["id"]."'>" . $row["Apellido"] .
					" </span></span></br><span>Sexo:<span id='sexo'class='".$row["id"]."'>" . $row["Sexo"] .  
					" </span></span></br><span>Correo:<span id='correo'class='".$row["id"]."'>" . $row["Correo"]. 
					" </span></span></br><span>Contra:<span id='contra'class='".$row["id"]."'>" . $row["Contra"] .
					" </span></span></br><span>Telefono:<span id='telefono'class='".$row["id"]."'>" . $row["Telefono"] .
					" </span></span></br><span>Direccion:<span id='direccion'class='".$row["id"]."'>" . $row["Direccion"]. 
					" </span></span></br><span>Descripcion:<span id='descripcion'class='".$row["id"]."'>" . $row["Descripcion"]. 
                    " </span></span></br><span>Oficio:<span id='oficio'class='".$row["id"]."'>" . $row["Oficio"].   
					" </span></span></br><span>Experiencia:<span id='experiencia'class='".$row["id"]."'>" . $row["Experiencia"]. 
					" </span></span></p></div>";
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

		<?php include('../components/footer.inc.php'); ?>

        <script>
            $("#main_container").click(function(event) {
                const text = document.getElementById(event.target.className).innerHTML;
                document.getElementById("span_muestra").innerHTML=text;

            });

            function hide(id){
                document.getElementById(id).style.display="none";
                }

            function show_zoom(){

                document.getElementById("zoom").style.display="block";
                }
        </script>
    </body>
</html>