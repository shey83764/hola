<?php
$id_talle=$_REQUEST['id_talle'];
$numT=$_REQUEST['numero_talla'];
$actuali12="UPDATE ventas SET prenda='$numT',WHERE id=$id_talle";
include ('conexion.php');
$ejec12=$cone->query($actuali12);
if ($ejec12) {		header('location:mostrarTalles.php');}
?>