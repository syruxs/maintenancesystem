<?php
//Declarar las variables
$hostname="localhost";
$username="root";
$passname="";
$dbname="maintenancesystem";
//Crear conexion
$conn=mysqli_connect($hostname, $username, $passname, $dbname);
//Chequear conexion
if (!$conn){

    die("La conexion ha fallado: " . mysqli_connect_error());
}
echo "";
?>