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
    $id5=$_REQUEST['id'];
    $select5="SELECT*FROM sucursales WHERE id=$id5";
    $resul5=$cone->query($select5);
    $fila5=$resul5->fetch_assoc();
    ?>
    <form action="guardarsucur.php" method="get">
    <h3>nombre de la sucursal</h3>
    <input type="text" name="unombre" value="<?php echo $fila5['nombre']?>"/>
    <h3>localidad de la sucursal</h3>
    <input type="text" name="usucur" value="<?php echo $fila5['sucur']?>"/>
    <input type="submit" value="Actualizar"/>
</form>
</body>
</html>