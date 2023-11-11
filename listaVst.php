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
      <h3>Lista de registros de vestimentas</h3>
      <table border=3>
        <tr>
           <th>id_vestimenta</th>
           <th>nombre_vestimenta</th>
        </tr>
    <?php $cont13=0;
while ($fila13=$resu13->fetch_assoc()){
    $cont13=$cont13+1;
    ?>
    <tr>
       <?php echo $cont13 ?></td>
       <td><?php echo $fila13['id_vestimenta']?></td>
       <td><?php echo $fila13['nombre_vestimenta']?></td>
       <td><a href='formularioVst.php?id=<?php echo $fila13['id']?>'>actualizar</a></td>
       <td><a href='eliminarVst.php?id=<?php echo $fila13['id']?>'>borrar</a></td>
    </tr>
<?php
}
?>
</table>
cantidad de registros cargados:<?php echo $cont3 ?>
<br>
<a href="formularioVst.php">Cargas registrados</a>
</body>
</html>