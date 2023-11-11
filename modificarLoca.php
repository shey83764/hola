<?php
$id_loca=$_REQUEST['id_localidad'];
$nombre=$_REQUEST['nombre'];
$cod=$_REQUEST['codigo_postal'];
$actuali1="UPDATE localidad SET nombre='$nombre',codigo_postal='$cod' WHERE id_localidad=$id_loca";
include ('conexion.php');
$ejec10=$cone->query($actuali10);
if ($ejec10) {		header('location:mostrarLoca.php');}
?>