<?php
$pd= $_GET['prenda'];
$c= $_GET['clientes'];
$s= $_GET['sucursales'];
echo $pd.$c.$s;
$SQL3 = "INSERT INTO ventas(prenda,clientes,sucursales) VALUES($pd, $c,$s)";
include('conexion.php');
 $cone->query($SQL3);
 header('location:mostrarventas.php');
?>
