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

    <div class="container justify-content-center py-2">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="signup-form">
    <?php

    $sql="SELECT * FROM migrantes WHERE '{$var}' = id_mig;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
?>
        
    <h3>Nombre</h3>
    <p><?php echo $row["nombre"];?></p>

    <h3>Apellido</h3>
    <p><?php echo $row["apellido"];?></p>

    <h3>Correo</h3>
    <p><?php echo $row["email"];?></p>

    <h3>Teléfono</h3>
    <p><?php echo $row["telefono"];?></p>

    <h3>Sexo</h3>
    <p><?php echo $row["sexo"];?></p>

    <h3>Español</h3>
    <p><?php echo $row["lengua"];?></p>

    <h4>Oficio</h4>
    <p><?php echo $row["oficio1"];?></p>

    <h4>Experiencia</h4>
    <p><?php echo $row["oficio1_exp"];?></p>

    <?php
        if($row["oficio2"]!=="def"){
    ?>
        <h4>Oficio 2</h4>
        <p><?php echo $row["oficio2"];?></p>

        <h4>Experiencia</h4>
        <p><?php echo $row["oficio2_exp"];?></p>

    <?php
        }
    ?>

    <h4>Descripción</h4>
    <p><?php echo $row["descripcion"];?></p>

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
</div>

<?php
    include_once '../components/footer.inc.php';
?>

</body>
</html>