<?php
// Desactivar toda las notificaciónes del PHP
//error_reporting(0);

$user=$_POST['usuario'];
$pass=sha1($_POST['password']);
$name=$_POST['nombre'];
$email=$_POST['correo'];
$fono=$_POST['telefono'];
$perfil="VISITA";
$estado="ACTIVO";
$ip=$_SERVER["REMOTE_ADDR"];
$date=date('Y-m-d');

require("admin/conex.php");
//Buscarmos el usuario
$consulta="SELECT*FROM user where user='$user'";
$result=mysqli_query($conn, $consulta);


if(mysqli_num_rows($result)!=0){
    echo "<script type=\"text/javascript\">alert(\"El usuario ya esta registrado, por favor ingrese otro usuario.\");</script>";
    echo "<script type=\"text/javascript\">history.back(-1);</script>";
}else{

$table_save = "INSERT INTO `user` (`user`, `pass`, `nombre`, `correo`, `fono`, `perfil`, `estado`, `ip`, `date`) VALUES ('$user', '$pass', '$name', '$email', '$fono', '$perfil', '$estado', '$ip', '$date')"; 

session_start();
$_SESSION['user'] = $user;

$insert=mysqli_query($conn, $table_save);
        if(!$insert){
            echo mysql_error()."Error !!";
        }else{
            echo "<script type=\"text/javascript\">alert(\"Los datos se han guardado correctamente\");</script>";
            header("location:bienvenido.php");
       }
   
}
//mysqli_free_result($result);
//mysqli_close($conn);
?>