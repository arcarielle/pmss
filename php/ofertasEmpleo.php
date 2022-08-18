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
                        <h1 class="text-light mb-2 mt-5">Ofertas de empleo</h1>
                        <div class="col-md-12">
                            <p class="fs-4 text-light">En esta sección puedes buscar diferentes empleos que se ajusten a tu experiencia o necesidad.</p>
                        </div>
                    </div>
                    <div class="col-md-12 my-5">
                        <section>
                            <div class="input-group p-3 mask bg-white bg-opacity-25"> 
                                <input type="text" class="form-control fs-5" placeholder="Busca por un trabajo en particular . . ." aria-label="Busqueda" aria-describedby="busquedaempleo">
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
                    <h6 class="text-white mt-1 text-center">Usa la barra de búsqueda para facilitar el encontrar un empleo adecuado para tí.</h6>                
                </div>
            </div>
        </div>

            <<div class="container px-4 py-5" id="custom-cards">
                <h1 class="pb-2 border-bottom text-dark">Lista de Empleos </h1>

                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('/pmss/assets/img/recepcionista.jpg'); background-size: cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 bg-dark bg-opacity-50">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Recepcionista</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="/pmss/assets/img/x.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <i class="fa-solid fa-dollar-sign"></i>
                                <small>&nbsp2,200</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fa-solid fa-calendar-days"></i>
                                <small>&nbsp3d</small>
                            </li>
                            <li class="d-flex align-items-center ms-3">
                                <button type="button" class="btn btn-outline-info">Aplicar</button>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('/pmss/assets/img/jardineria.jpg'); background-size: cover; opacity: 0.9;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 bg-dark bg-opacity-50">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Jardinero</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="/pmss/assets/img/x.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                            <i class="fa-solid fa-dollar-sign"></i>
                                <small>&nbsp2,000</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fa-solid fa-calendar-days"></i>
                                <small>&nbsp4d</small>
                            </li>
                            <li class="d-flex align-items-center ms-3">
                                <button type="button" class="btn btn-outline-info">Aplicar</button>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('/pmss/assets/img/cocinero.jpg'); background-size: cover;">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 bg-dark bg-opacity-50">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Cocinero</h2>
                            <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="/pmss/assets/img/x.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <i class="fa-solid fa-dollar-sign"></i>
                                <small>&nbsp2,300</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fa-solid fa-calendar-days"></i>
                                <small>&nbsp5d</small>
                            </li>
                            <li class="d-flex align-items-center ms-3">
                                <button type="button" class="btn btn-outline-info">Aplicar</button>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
    </div>

    <?php
        include_once '../components/footer.inc.php';
    ?>
</body>
</html>