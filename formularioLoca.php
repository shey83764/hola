<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
</head>
<body>
    <?php
    include('conexion.php');
    $id10=$_REQUEST['id'];
    $select10="SELECT*FROM indumentaria WHERE id=$id10";
    $resu10=$cone->query($select10);
    $fila10=$resu10->fetch_assoc();
    ?>
    <form action="guardarlocali.php" method="get">
    <h3>nombre de la localidad</h3>
    <input type="num" name="uloca" value="<?php echo $fila10['localidad']?>"/>
    <h3>ingrese el codigo postal</h3>
    <input type="num" name="ucod" value="<?php echo $fila10['codigo_postal']?>"/>
    <input type="submit" value="Actualizar"/>
</form>
</body>
</html>