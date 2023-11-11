<?php
include 'conexion.php';
$sel2="SELECT * from sucursales";
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
           <th>id_sucursales</th>
           <th>nombre</th>
           <th>localidad</th>
        </tr>
    <?php $cont5=0;
while ($fila5=$resu5->fetch_assoc()){
    $cont5=$cont5+1;
    ?>
    <tr>
       <?php echo $cont5 ?></td>
       <td><?php echo $fila5['id_sucursales']?></td>
       <td><?php echo $fila5['nombre']?></td>
       <td><?php echo $fila5['localidad']?></td>
       <td><a href='formulariosucu.php?id=<?php echo $fila5['id']?>'>actualizar</a></td>
       <td><a href='eliminarsucu.php?id=<?php echo $fila5['id']?>'>borrar</a></td>
    </tr>
<?php
}
?>
</table>
cantidad de registros cargados:<?php echo $cont5 ?>
<br>
<a href="formulariosucu.php">Cargas registrados</a>
</body>
</html>