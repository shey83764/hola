<?php
include 'conexion.php';
$sel2="SELECT * from ventas";
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
           <th>id_ventas</th>
           <th>prenda</th>
           <th>clientes</th>
           <th>sucursales</th>
        </tr>
    <?php $cont3=0;
while ($fila3=$resu3->fetch_assoc()){
    $cont3=$cont3+1;
    ?>
    <tr>
       <?php echo $cont3 ?></td>
       <td><?php echo $fila3['id_ventas']?></td>
       <td><?php echo $fila3['prenda']?></td>
       <td><?php echo $fila3['clientes']?></td>
       <td><?php echo $fila3['sucursales']?></td>
       <td><a href='formularioventa.php?id=<?php echo $fila3['id']?>'>actualizar</a></td>
       <td><a href='eliminarventas.php?id=<?php echo $fila3['id']?>'>borrar</a></td>
    </tr>
<?php
}
?>
</table>
cantidad de registros cargados:<?php echo $cont3 ?>
<br>
<a href="formulariventa.php">Cargas registrados</a>
</body>
</html>