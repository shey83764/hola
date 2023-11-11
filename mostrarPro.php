<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fonts/css/all.min.css">
	<title>proveedor</title>
</head>
<body>

<?php
	include('conexion.php');
	$sel11="SELECT prendas.id_prenda,prendas.marca,prendas.vestimenta,
	prendas.proveedores,prendas.talles,prendas.precios,prendas.cantidad,proveedor.id_proveedor,proveedor.nombre_pro 
	AS Pprove FROM prendas INNER JOIN proveedor ON prendas.proveedores=proveedor.nombre_pro";
	$ejec11=$cone->query($sel11);
?>
	<table border="3">
		<tr>
			<th>id_proveedor</th>
			<th>nombre_pro</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato11=$ejec11->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato11['id_proveedor'] ?></td>
			<td><?php echo $dato11['nombre_pro'] ?></td>
			<td><?php echo $dato11['Pprove'] ?></td>
			<td>
				<a href='eliminarPro.php?id=<?php echo $dato11['id'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formularioPro.php?id=<?php echo $dato11['id'] ?>'>Editar</a>
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