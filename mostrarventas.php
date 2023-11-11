<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fonts/css/all.min.css">
	<title>ventas</title>
</head>
<body>

<?php
	include('conexion.php');
	$sel3="SELECT prendas.id_prenda,prendas.marca,prendas.vestimenta, prendas.proveedores,prendas.talles,prendas.precios,prendas.cantidad,ventas.venta,ventas.prenda,ventas.clientes,ventas.sucursales AS Vventas FROM prendas INNER JOIN ventas ON prendas.id_prenda=ventas.prenda";
	$ejec3=$cone->query($sel3);
?>
	<table border="3">
		<tr>
			<th>id_ventas</th>
			<th>prenda</th>
			<th>cliente</th>
			<th>sucursales</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato3=$ejec3->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato3['id_prendas'] ?></td>
			<td><?php echo $dato3['marcas'] ?></td>
			<td><?php echo $dato3['vestimentas'] ?></td>
			<td><?php echo $dato3['proveedores'] ?></td>
			<td><?php echo $dato3['Vventas'] ?></td>
			<td>
				<a href='eliminarventas.php?id=<?php echo $dato3['id'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formularioventa.php?id=<?php echo $dato3['id'] ?>'>Editar</a>
			</td>
		</tr>
	<?php
	}
	?>
	</table>
	<br>
	<a href="index.php">
		<button>Formulario</button>
	</a>

</body>
</html>