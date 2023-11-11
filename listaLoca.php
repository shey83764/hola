<?php
include 'conexion.php';
$sel2="SELECT * from marca";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h3>Lista de registros de Localidades</h3>
      <table border=3>
        <tr>
           <th>id_localidad</th>
           <th>nombre_localidad</th>
           <th>codigo_postal</th>
        </tr>
    <?php $cont10=0;
while ($fila10=$resu10->fetch_assoc()){
    $cont10=$cont10+1;
    ?>
    <tr>
       <!-- <td><?php echo $cont10 ?></td> -->
       <td><?php echo $fila10['id_localidad']?></td>
       <td><?php echo $fila10['nombre_localidad']?></td>
       <td><?php echo $fila10['codigo_postal']?></td>
       <td><a href='formularioLoca.php?id=<?php echo $fila10['id']?>'>actualizar</a></td>
       <td><a href='eliminarLoca.php?id=<?php echo $fila10['id']?>'>borrar</a></td>
    </tr>
<?php
}
?>
</table>
cantidad de registros cargados:<?php echo $cont10?>
<br>
<a href="formularioLoca.php">Cargas registrados</a>
</body>
</html>