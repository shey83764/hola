<?php
$nm=$_GET['nombre'];
$lc=$_GET['localidad'];
echo$nm.$lc;
$SQL5="INSERT INTO sucursales (nombre,localidad)VALUES('$nm',$lc)";
include('conexion.php');
$cone->query($SQL5);
header('location: mostrarsucur.php');
?>
