<?php
$pr=$_GET['upro'];
echo $pr;
$SQL11="INSERT INTO OR proveedor(nombre_pro) VALUES('$pr')";
include('conexion.php');
$cone->query($SQL11);
header('location:mostrarPro.php');
?>