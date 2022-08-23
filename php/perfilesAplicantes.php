<?php
    include_once '../components/head.inc.php';
?>
<body>
    <?php
        include_once '../components/header.inc.php';
    ?>
    <div class="">
        <div style="background-color: rgb(32,132,84)">
            <div class="container justify-content-center">
                <div class="row" >
                    <div class="col-md-12 justify-content-start mb-5">
                        <h1 class="text-light mb-2 mt-5">Perfiles de aplicantes</h1>
                        <div class="col-md-12">
                            <p class="fs-4 text-light">En esta sección puedes buscar los distintos aplicantes para poder contactar con ellos.</p>
                        </div>
                    </div>
                    <div class="col-md-12 my-5">
                        <section>
                            <div class="input-group p-3 mask bg-white bg-opacity-25"> 
                                <input type="text" class="form-control fs-5" placeholder="Busca por el oficio deseado . . ." aria-label="Busqueda" aria-describedby="busquedaempleo">
                                <div class="input-group-append mx-2 px-2"> 
                                    <button class="btn btn-outline-light p-3 fs-5" type="button"><i class="fa-solid fa-magnifying-glass"></i> &nbspBuscar &nbsp</button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-3 mask bg-dark bg-opacity-50">
                <div class="container ">
                    <h6 class="text-white mt-1 text-center">Usa la barra de búsqueda para facilitar el encontrar un aplicante que se ajuste a tu oficio.</h6>                
                </div>
            </div>
        </div>

            <div class="container px-4 py-5" id="custom-cards">
                <h1 class="pb-2 border-bottom text-dark">Lista de Aplicantes </h1>

                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <?php

                        require_once '../assets/includes/dbh.inc.php';
                        require_once '../assets/includes/functions.inc.php';

                        $sql = "SELECT * FROM migrantes";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                

                        $str = $row["descripcion"];
                        if (strlen($str) > 177) {
                            $str = substr($str,0,178).'...';
                        }


                    ?>

                    <div class="card" style="width: 18rem;margin:10px;">
                        <div class="card-body">
                            
                            <h5 class="card-title"><?php echo $row["nombre"];?></h5>
                            <p class="card-text"><?php echo $str;?></p>
                        
                            <h6 class="card-title"><?php echo $row["oficio1"];?></h6>
                            <p class="card-text">Experiencia: <?php echo $row["oficio1_exp"];?></p>

                    <?php
                        if($row["oficio2"]!=="def"){
                    ?>
                        <h6 class="card-title"><?php echo $row["oficio2"];?></h6>
                        <p class="card-text">Experiencia: <?php echo $row["oficio2_exp"];?></p>

                    <?php
                        }
                    ?>

                            <h6 class="card-title">Español</h6>
                            <p class="card-text"><?php echo $row["lengua"];?></p>
                            
                            <h6 class="card-title">Teléfono</h6>
                            <p class="card-text"><?php echo $row["telefono"];?></p>
                            
                            <h6 class="card-title">Domicilio</h6>
                            <p class="card-text"><?php echo $row["domicilio"];?></p>
                        </div>
                        <div class="card-body">
                            <form action="/pmss/php/desplegarMigrante.php" method="post">
                                <button type="submit" name="ver_mas" value="<?php echo $row["id_mig"];?>" class="btn btn-primary float-end">Ver mas</button>
                            </form>
                            <!-- <a href="#" class="card-link">Más Información</a> -->
                            <!-- <a href="#" class="card-link">Another link</a> -->
                        </div>
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
            </div>
        
        
    </div>

    <?php
        include_once '../components/footer.inc.php';
    ?>
</body>
</html>