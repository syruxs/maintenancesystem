<?php
$user=$_POST['user'];
$pass=sha1($_POST['pass']);

session_start();
$_SESSION['user']=$user;

require("admin/conex.php");

$consulta="SELECT*FROM user where user='$user' and pass='$pass' and estado='ACTIVO'";
$result=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($result);

if($filas){
    header("location:root/principal.php");

}else{
    ?>
    <?php
    include("index.html");
    ?>
   
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
     echo "<script type=\"text/javascript\">alert(\"Existe un error en la autentificacion\");</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);