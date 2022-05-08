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
        <!--hojas de etilos-->
        <link href="css/styleBienvenido.css" rel="stylesheet">
        <!--link para efectos-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
        <!--Redireccionar-->
        <script type="text/javascript">
            setTimeout(function() => {
                window.location.replace(http://localhost:3000/root/principal.php;
     
            }, 5000);

        </script>
        <title>Bienvenido <?php 
        echo "".$ver."";
        
        ?></title>
      <style>
        p#nombre {text-transform:capitalize;}
        .formulario__btn {
            background-color: #48e;
	        color: #fff;
	        width: calc(80% - 20px);
	        margin: 0 10%;
	        margin-top: 22px;
	        border: none;
            height: 50px;
        }

        .formulario__btn:hover {
            box-shadow: 3px 0px 30px rgba(163,163,163, 1);
        }
      </style>
    </head>
<body>
<div class="mensaje">
        <?php
        echo "<p class='animate__animated animate__backInLeft' id='nombre'> Bienvenido <br> ".$nombre. " <br><br>
        </p>
        Tu registro ha sido procesado de forma exitosa, haz clic en el boton ingresar para acceder a tu sitio. o haz clic en el boton crear para registrar tus vehiculos.";
        
        ?>
        <br>
        
    <button type="submit" class="formulario__btn" onclick="location.href='http://localhost:3000/login.php'">Ingresar</button>
    <button type="submit" class="formulario__btn" onclick="location.href='http://localhost:3000/crearvehiculo.php'">Crear Vehiculo</button>
</div>
</body>
<?php
/*if(isset($_SESSION['user'])) {
	unset($_SESSION['user']);
}*/
?>
</htnl>