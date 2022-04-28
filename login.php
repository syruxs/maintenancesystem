<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <!--favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/site.webmanifest">
        <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!--hojas de etilos-->
        <link href="css/stylelogin.css" rel="stylesheet">
        <!--link para efectos-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
        <!--Para mostrar contraseña-->
        <script src="js/mostrarPassword.js"></script>
        <!--Carga el ojo-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--cuadra el ojo y nav-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--hace que cambie el ojo-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--Validar formulario antes de ser enviado-->
        <script src="js/validarLoginCampos.js"></script>

      <title>Sistema de Mantenimiento</title> 
    </head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/icono.png" width="80" title="Maintenance System"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="contacto.php">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="login.php">Ingresar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="registro.php">Registrase</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<main>
<form action="validaruser.php" method="post" class="formulario">
  <h1 class="animate__animated animate__backInLeft">Sistema de login</h1>
    <p><input autofocus type="text" placeholder="Ingrese su usuario" Class="form-control" name="user" id="user" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.lowercase();" title="Ingrese su usuario"></p>
      <div class="input-group">
        <p><input ID="txtPassword" type="Password" Class="form-control"  placeholder="Ingrese su contraseña" name="pass" title="Ingrese su contraseña"></p>
          <div class="input-group-append">
            <p><button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> 
              <span class="fa fa-eye-slash icon"></span> 
            </button></p>
          </div>
      </div>
    <input type="submit" value="Ingresar">
</form>
</main>
<!--Permite que se desplegue el Menu-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>