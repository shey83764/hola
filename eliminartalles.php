<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body>
<?php
$delta12="DELETE FROM talles WHERE id =$id12";
include ('conexion.php');
$cone->query($delta12);
header ('location; listaTalles.php');
?>
</body>
</html>