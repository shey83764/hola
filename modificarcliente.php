<?php
$id_c=$_REQUEST['id_cliente'];
$nom=$_REQUEST['nombre'];
$dire=$_REQUEST['direccion'];
$loca=$_REQUEST['localidad'];
$actuali4="UPDATE cliente SET nombre='$nom',direccion='$dire', localidad='$loca'WHERE id=$id_c";
include ('conexion.php');
$ejec4=$cone->query($actuali4);
if ($ejec4) {header('location:mostrarcliente.php');}
?>