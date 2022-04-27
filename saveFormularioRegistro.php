<?php
// Desactivar toda las notificaciónes del PHP
error_reporting(0);

echo $user=$_POST['usuario'];
echo $pass=sha1($_POST['password']);
echo $name=$_POST['nombre'];
echo $email=$_POST['correo'];
echo $fono=$_POST['telefono'];
echo $perfil=$_POST['VISITA'];
echo $estado=$_POST['ACTIVO'];
echo $ip=$_SERVER['HTTP_CLIENT_IP'];
echo $date=date('Y-m-d');

require("admin/conex.php");
//Buscarmos el usuario
$consulta="SELECT*FROM user where user='$user'";
$result=mysqli_query($conn,$consulta);
$filas=mysqli_num_rows($result);

if($filas){
    session_start();
    $_SESSION['user']=$user;
    echo "<script type=\"text/javascript\">alert('Los datos se han guardado exitosamente');</script>";
    echo "<script type=\"text/javascript\">history.go(-1);document.getElementById('formulario').reset();</script>";
    header("location:bienvenido.php");
    /*
    include("registro.php");
    echo "<script type=\"text/javascript\">history.go(-1);</script>";
    echo "<script type=\"text/javascript\">alert(\"El usuario ya existe\");</script>";
    */
    
}else{
    session_start();
    $_SESSION['user']=$user;
    echo "<script type=\"text/javascript\">alert('Los datos se han guardado exitosamente');</script>";
    echo "<script type=\"text/javascript\">history.go(-1);document.getElementById('formulario').reset();</script>";
    header("location:bienvenido.php");
}
mysqli_free_result($result);
mysqli_close($conn);
?>