<?php
$id_vestimenta=$_REQUEST['id'];
$nomV=$_REQUEST['nombre_vestimenta'];
$actuali13="UPDATE vestimenta SET nombre_vestimenta='$nomV',WHERE id=$id_vestimenta";
include ('conexion.php');
$ejec13=$cone->query($actuali13);
if ($ejec13) {		header('location:mostrarVst.php');}
?>