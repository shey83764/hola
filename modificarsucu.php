<?php
$id_sucu=$_REQUEST['id_sucu'];
$noms=$_REQUEST['nombre_sucu'];
$lcs=$_REQUEST['localidad_sucu'];
$actuali5="UPDATE sucursales SET nombre_sucu='$noms',localidad_sucu='$lcs'WHERE id_sucu=$id_sucu";
include ('conexion.php');
$ejec5=$cone->query($actuali5);
if ($ejec5) {		header('location:mostrarsucu.php');}
?>