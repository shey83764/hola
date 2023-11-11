<?php
$id_v=$_REQUEST['id_ventas'];
$pRen=$_REQUEST['prenda'];
$cli=$_REQUEST['clientes'];
$sucu=$_REQUEST['sucursales'];
$actuali3="UPDATE ventas SET prenda='$pRen',cliente='$clie', sucursales='$sucu'WHERE id=$id_v";
include ('conexion.php');
$ejec3=$cone->query($actuali3);
if ($ejec3) {		header('location:mostrarventas.php');}
?>