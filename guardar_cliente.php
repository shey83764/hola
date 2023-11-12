<?php
$nom=$_GET['cliente'];
$dire=$_GET['direccion'];
$loca=$_GET['localidad'];
echo $nom.$dire.$loca;
$SQL4="INSERT INTO cliente (nombre_cliente,direccion,localidad)VALUES('$nom','$dire',$loca)";
include('conexion.php');
$cone->query($SQL4);
header('location:mostrarcliente.php');
?>
