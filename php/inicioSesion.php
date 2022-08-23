<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Impulso Migrante - Tu portal para encontrar empleo</title>
        <!-- Icon -->
        <link rel="icon" href="/pmss/assets/img/favicon.ico" type="image/x-icon">
        <!-- Framework -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"/>
        <link rel="stylesheet" href="/pmss/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/pmss/assets/css/style.css">
        <script src="/pmss/assets/js/bootstrap.bundle.js" defer></script>
        <script src="https://kit.fontawesome.com/de3c5b6510.js" crossorigin="anonymous" defer></script>
        <script src="/pmss/assets/js/jquery-3.6.0.min.js" defer></script>
        <script src="/pmss/assets/js/jquery-ui.min.js" defer></script>
        <script src="/pmss/assets/js/daterangepicker.min.js" defer></script>
        <script src="/pmss/assets/js/moment.min.js" defer></script>
        <script src="/pmss/assets/js/popper.min.js" defer></script>
        <script type="text/javascript" src="/pmss/assets/js/impmig.js" defer></script>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    </head>
    

<body class="text-center container" style="background: #134E5E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #71B280, #134E5E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #71B280, #134E5E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

    <!-- Custom styles for this template -->
    <link href="/pmss/assets/css/signin.css" rel="stylesheet">
    
<main class="form-signin w-100 m-auto">
  <form action="/pmss/assets/includes/login.inc.php" method="post">
    <a href="/pmss/index.php"><img class="mb-4" src="/pmss/assets/img/logo.png" alt="" width="300" height="57"></a>
    <h1 class="h3 mb-3 text-white fw-normal">Inicio de Sesión</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Correo Electrónico</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>
    <div>
    <?php
      if(isset($_GET["error"])){
          if($_GET["error"] == "pwdNoMatch"){
              echo "<h2 class='fs-12 text-danger'>Contraseña Incorrecta</h2>";
          }
          else if($_GET["error"] == "notFound"){
              echo "<h2 class='fs-12 text-danger'>No existe usuario con esta cuenta</h2>";
          }
      }
    ?>
    </div>
    <div class="checkbox mb-3">
      <label class="text-white">
        <input type="checkbox" value="remember-me"> Recuérdame
      </label>
    </div>
    <button class="w-100 btn btn-lg text-light" style="background-color: rgb(27, 159, 71)" name ="login" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; Impulso Migrante 2022</p>
  </form>
</main>


    
  </body>
</html>