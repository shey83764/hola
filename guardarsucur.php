<?php
$nm=$_GET['nombre'];
$lc=$_GET['localidad'];
echo$nm.$lc;
$SQL5="INSERT INTO sucursales (nombre,localidad)VALUES('$nm',$lc)";
include('conexion.php');
$resultado=$cone->query($SQL5);
if ($resultado) {
    echo "<h2>El registro se guardó correctamente</h2>";
        }
    else {
        echo "<h2>No se pudo guardar el registro</h2>";
    }
?>