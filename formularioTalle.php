<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos(ventas)</title>
</head>
<body>
    <?php
    include('conexion.php');
    $id12=$_REQUEST['id'];
    $select12="SELECT*FROM talles WHERE id=$id12";
    $resul12=$cone->query($select12);
    $fila12=$resul12->fetch_assoc();
    ?>
    <form action="guardarTalle.php" method="get">
    <h3>talles</h3>
    <input type="num" name="utalle" value="<?php echo $fila12['talle']?>"/>
    <input type="submit" value="Actualizar"/>
</form>
</body>
</html>