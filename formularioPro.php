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
    $id11=$_REQUEST['id'];
    $select11="SELECT*FROM indumentaria WHERE id=$id11";
    $resul11=$cone->query($select11);
    $fila11=$resul11->fetch_assoc();
    ?>
    <form action="guardarPro.php" method="get">
    <h3>nombre del proveedor</h3>
    <input type="text" name="upro" value="<?php echo $fila11['proveedor']?>"/>
    <input type="submit" value="Actualizar"/>
</form>
</body>
</html>