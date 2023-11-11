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
    $id4=$_REQUEST['id'];
    $select4="SELECT*FROM cliente WHERE id=$id4";
    $resul4=$cone->query($select4);
    $fila4=$resul4->fetch_assoc();
    ?>
    <form action="guardarcliente.php" method="get">
    <h3>nombre</h3>
    <input type="text" name="unom" value="<?php echo $fila4['nombre']?>"/>
    <h3>direccion</h3>
    <input type="text" name="udire" value="<?php echo $fila4['direccion']?>"/>
    <br>
    <input type="submit" value="Actualizar"/>
</form>
</body>
</html>