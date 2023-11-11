<?php
$nomV=$_GET['nombre_vestimenta'];
echo$nomV;
$SQL13="INSERT INTO vestimenta(nombre_vestimenta) VALUES('$nomV')";
include('conexion.php');
$resu13=$cone->query($SQL13);
if ($resultado) {
    echo "<h2>El registro se guardó correctamente</h2>";
        }
    else {
        echo "<h2>No se pudo guardar el registro</h2>";
    }
?>