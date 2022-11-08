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
                
    <?php

    $sql="SELECT * FROM migrantes WHERE '{$var}' = id_mig;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
?>
        <div class="m-2 perfildesplegado1" style="background-color:gray;"> 
            
            <?php
                if($row["dir_perfil"]!==""){
            ?>
                
                <img src="/pmss/assets/includes/<?php echo $row["dir_perfil"];?>" alt="Smiley face" height="150px" style="float:right;border:1px solid #ddd;border-radius:4px;padding: 5px;">

            <?php
                }
            ?>
        
            <h4>Nombre</h4>
            <p><?php echo $row["nombre"];?> <?php echo $row["apellido"];?></p>

            <h4>Correo</h4>
            <p><?php echo $row["email"];?></p>

            <h4>Teléfono</h4>
            <p><?php echo $row["telefono"];?></p>

            <h4>Teléfono Whatsapp</h4>
            <p><?php echo $row["telefono_whats"];?></p>

            <h4>Sexo</h4>
            <p><?php echo $row["sexo"];?></p>

            <h4>¿Sabe español?</h4>
            <p><?php echo $row["lengua"];?></p>

            <h4>Especialidad</h4>
            <p><?php echo $row["oficio1"];?></p>

            <h4>Experiencia</h4>
            <p><?php echo $row["oficio1_exp"];?></p>

            <?php
                if($row["oficio2"]!==""){
            ?>
                <h4>Especialidad #2</h4>
                <p><?php echo $row["oficio2"];?></p>

                <h4>Experiencia</h4>
                <p><?php echo $row["oficio2_exp"];?></p>

            <?php
                }
            ?>
        </div>
        <div class="m-2 p-2 perfildesplegado2" style="background-color:gray;">

            <h4>Estancia en el país</h4>
            <p><?php echo $row["estancia"];?></p>

            <h4>Descripción</h4>
            <p><?php echo $row["descripcion"];?></p>
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

<?php
    include_once '../components/footer.inc.php';
?>

</body>
</html>