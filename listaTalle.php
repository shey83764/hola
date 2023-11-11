<?php
include 'conexion.php';
$sel2="SELECT * from talles";
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
      <h3>Lista de registros de talles</h3>
      <table border=3>
        <tr>
           <th>id_talle</th>
           <th>numero_talla</th>
           <th>eliminar</th>
           <th>modificar</th>
        </tr>
    <?php $cont12=0;
while ($fila12=$resu12->fetch_assoc()){
    $cont12=$cont12+1;
    ?>
    <tr>
       <?php echo $cont12 ?></td>
       <td><?php echo $fila12['id_talle']?></td>
       <td><?php echo $fila12['numero_talla']?></td>
       <td><a href='formularioTalle.php?id=<?php echo $fila12['id']?>'>actualizar</a></td>
       <td><a href='eliminartalles.php?id=<?php echo $fila12['id']?>'>borrar</a></td>
    </tr>
<?php
}
?>
</table>
cantidad de registros cargados:<?php echo $cont12 ?>
<br>
<a href="formularioTalle.php">Cargas registrados</a>
</body>
</html>