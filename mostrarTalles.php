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
	$sel12="SELECT prendas.id_prenda,prendas.marca,prendas.vestimenta,
	prendas.proveedores,prendas.talles,prendas.precios,prendas.cantidad,talles.id_talle,talles.numero_talla 
	AS Ptalles,talles.numero_talla FROM prendas INNER JOIN talles ON prendas.talles=talles.numero_talla";
	$ejec12=$cone->query($sel12);
?>
	<table border="3">
		<tr>
			<th>id_talle</th>
			<th>numero_talla</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato12=$ejec12->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato12['id_talle'] ?></td>
			<td><?php echo $dato12['numero_talla'] ?></td>
			<td><?php echo $dato12['Ptalles'] ?></td>
			<td>
				<a href='eliminartalles.php?id=<?php echo $dato12['id'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formularioTalle.php?id=<?php echo $dato12['id'] ?>'>Editar</a>
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