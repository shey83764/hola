<?php
$nl=$_GET['uloca'];
$cod=$_GET['ucod'];
echo $nl.$cod;
$SQL10="INSERT INTO localidad(nombre,codigo_postal) VALUES('$nl',$cod)";
include('conexion.php');
$cone->query($SQL10);
header('location:mostrarLoca.php')
?>
