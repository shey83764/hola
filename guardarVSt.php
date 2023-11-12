<?php
$nomV=$_GET['nombre_vestimenta'];
echo$nomV;
$SQL13="INSERT INTO vestimenta(nombre_vestimenta) VALUES('$nomV')";
include('conexion.php');
$cone->query($SQL13);
header('location:mostrarVst.php');
?>
