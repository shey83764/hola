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
	$sel5="SELECT sucursalesa.id_sucurles,sucursales.nombre,sucursales.localidad,ventas.id_venta,ventas.prenda,ventas.clientes,ventas.sucursales AS Vsucur FROM sucursales INNER JOIN  ventas ON nombre.sucursales=ventas.sucursales";
	$ejec5=$cone->query($sel5);
?>
	<table border="3">
		<tr>
			<th>id_sucursal</th>
			<th>nombre</th>
			<th>localidad</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato5=$ejec5->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato5['id_sucursales'] ?></td>
			<td><?php echo $dato5['nombre'] ?></td>
			<td><?php echo $dato5['localidad'] ?></td>
			<td>
				<a href='eliminarsucu.php?id=<?php echo $dato5['id'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formulariosucu.php?id=<?php echo $dato5['id'] ?>'>Editar</a>
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