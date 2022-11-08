<?php
    include_once '../components/head.inc.php';
?>
<body>
    <?php
    
    include_once '../components/header.inc.php';

    if(isset($_POST['ver_mas'])){
        $var=$_POST['ver_mas'];

    require_once '../assets/includes/dbh.inc.php';
    require_once '../assets/includes/functions.inc.php';

    ?>

    <div class="justify-content-center py-2 px-2 fondodespliegue">
        <div class="row justify-content-center m-2">
            <!-- <div class="col-md-6 offset-md-1" style="background-color:blue;"> -->
                <!-- <div class="signup-form"> -->
    <?php

    $sql="SELECT pro.id_empresa, pro.id_proyecto, pro.oficio, pro.experiencia, pro.sexo, pro.hora1, pro.hora2, pro.lengua,
        pro.tipo, pro.sueldo, pro.descripcion, pro.disponibilidad,
        emp.empresa as 'Empresa', emp.giro as 'Giro', emp.correo as 'Correo',
        emp.direccion as 'Direccion', emp.telefono as 'Telefono', emp.giro as 'Giro', 
        emp.descripcion as 'Descripcion'
        FROM `proyectos_empleadores` pro, `empleadores` emp 
        WHERE pro.id_empresa = emp.id_emp and '{$var}' = pro.id_proyecto;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
    ?>
        
                <!-- <hr> -->

            <div class="m-2 p-2 perfildesplegado1" style="background-color:gray;">
                <h4>Oficio</h4>
                <p><?php echo $row["oficio"];?></p>

                <h4>Experiencia</h4>
                <p><?php echo $row["experiencia"];?></p>

                <h4>Sexo</h4>
                <p><?php echo $row["sexo"];?></p>

                <h4>Horario</h4>
                <p><?php echo $row["hora1"];?> a <?php echo $row["hora2"];?></p>

                <h4>¿Qué días de la semana es el trabajo?</h4>
                <p><?php echo $row["disponibilidad"];?></p>

                <h4>¿Tiene que saber español?</h4>
                <p><?php echo $row["lengua"];?></p>

                <h4>Tipo de Trabajo</h4>
                <p><?php echo $row["tipo"];?></p>

                <h4>Paga</h4>
                <p>$<?php echo $row["sueldo"];?></p>

                <h4>Descripción Trabajo</h4>
                <p><?php echo $row["descripcion"];?></p>
            </div>

            <div class="m-2 p-2 perfildesplegado2" style="background-color:gray">
                <h4>Empresa</h4>
                <p><?php echo $row["Empresa"];?></p>

                <h4>Giro</h4>
                <p><?php echo $row["Giro"];?></p>

                <h4>Descripción Empresa</h4>
                <p><?php echo $row["Descripcion"];?></p>

                <h4>Teléfono</h4>
                <p><?php echo $row["Telefono"];?></p>

                <h4>Correo</h4>
                <p><?php echo $row["Correo"];?></p>

                <h4>Dirección</h4>
                <p><?php echo $row["Direccion"];?></p>
            </div>
<?php
}}
else {
    echo "<h2 style='width:auto;'>Error</h2>";
}
    $conn->close();
?>
            
        </div>
    </div>
</div>

<?php
    include_once '../components/footer.inc.php';
?>

</body>
</html>