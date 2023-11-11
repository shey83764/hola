<?php
$nom=$_GET['cliente'];
$dire=$_GET['direccion'];
$loca=$_GET['localidad'];
echo $nom.$dire.$loca;
$SQL4="INSERT INTO cliente (nombre_cliente,direccion,localidad)VALUES('$nom','$dire',$loca)";
include('conexion.php');
$resul4=$cone->query($SQL4);
if ($resul4) {
    echo "<h2>El registro se guardó correctamente</h2>";
        }
    else {
        echo "<h2>No se pudo guardar el registro</h2>";
    }
?>