<?php
$numT=$_GET['utalle'];
echo$numT;
$SQL12="INSERT INTO talles(numero_talla) VALUES($numT)";
include('conexion.php');
$cone->query($SQL12);
header('location:mostrarTalles.php')
?>