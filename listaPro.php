<?php
include 'conexion.php';
$sel2="SELECT * from proveedor";
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
      <h3>Lista de registros de Prendas</h3>
      <table border=3>
        <tr>
           <th>id_proveedor</th>
           <th>nombre_proveedor</th>
        </tr>
    <?php $cont11=0;
while ($fila11=$resu11->fetch_assoc()){
    $cont11=$cont11+1;
    ?>
    <tr>
       <?php echo $cont11 ?></td>
       <td><?php echo $fila5['id_proveedor']?></td>
       <td><?php echo $fila5['nombre_pro']?></td>
       <td><a href='formularioPro.php?id=<?php echo $fila11['id']?>'>actualizar</a></td>
       <td><a href='eliminarPro.php?id=<?php echo $fila11['id']?>'>borrar</a></td>
    </tr>
<?php
}
?>
</table>
cantidad de registros cargados:<?php echo $cont11 ?>
<br>
<a href="formularioPro.php">Cargas registrados</a>
</body>
</html>