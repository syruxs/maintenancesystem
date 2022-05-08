<?php
session_start();
date_default_timezone_set('America/Santiago');
$ver=$_SESSION['user'];
/*
$s=explode(',',$ver);
	if($s[0]!=""){
	}	else{
		header("Location:../index.php");
		exit;
	}
*/
    require("admin/conex.php");
    require("select.php");

$Sql_user=mysqli_query($conn,"SELECT * FROM  user where user='$ver'");

    while($rst_Sql_name=mysqli_fetch_array($Sql_user)){
            $nombre=$rst_Sql_name['nombre'];
		}
    
       
?>
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
        <!--nav-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <!--hojas de etilos-->
        <link href="css/styleregistrovehiculos.css" rel="stylesheet">
        <!--link para efectos-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
        <!--cargar los select-->
        <script src="js/select.js"></script>
        <!--hace jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Crear Vehiculo</title> 
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
            <a class="nav-link" aria-current="page" href="login.php">Ingresar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Registrase</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<main>
    <div class="contenedor_registro_vehiculos">
        <form>
            <h1 class="animate__animated animate__backInLeft">Registro de Vehículos</h1>
            <p>Seleccionar Marca: </p>
            <select class="custom-select form-control" id="marca">

            </select> 
           </form>
    </div>
</main>
<!--Permite que se desplegue el Menu-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>