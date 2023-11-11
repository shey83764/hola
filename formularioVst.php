<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos(vestimenta)</title>
</head>
<body>
    <?php
    include('conexion.php');
    $id13=$_REQUEST['id'];
    $select13="SELECT*FROM vestimenta WHERE id=$id13";
    $resul13=$cone->query($select13);
    $fila13=$resul13->fetch_assoc();
    ?>
    <form action="guardarVSt.php" method="get">
    <h3>vestimenta</h3>
    <input type="text" name="uvest" value="<?php echo $fila3['nombre_vestimenta']?>"/>
   <br>
    <input type="submit" value="Actualizar"/>
</form>
</body>
</html>