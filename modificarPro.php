<?php
$id_proveedor=$_REQUEST['id_proveedor'];
$nP=$_REQUEST['nombre_pro'];
$actuali5="UPDATE proveedor SET nombre_pro='$nP'WHERE id_proveedor=$id_proveedor";
include ('conexion.php');
$ejec11=$cone->query($actuali11);
if ($ejec11) {		header('location:mostrarPro.php');}
?>