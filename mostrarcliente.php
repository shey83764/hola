<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fonts/css/all.min.css">
	<title>clientes</title>
</head>
<body>

<?php
	include('conexion.php');
	$select="SELECT cliente.id_cliente,cliente.nombre_cliente,cliente.direccion,cliente.localidad,ventas.id_venta,ventas.clientes AS Vcliente FROM cliente INNER JOIN ventas ON cliente.nombre_cliente=ventas.clientes";
	$ejec4=$cone->query($select);
?>
	<table border="3">
		<tr>
			<th>id_cliente</th>
			<th>nombre</th>
            <th>direccion</th>
			<th>localidad</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato4=$ejec4->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato4['id_cliente'] ?></td>
			<td><?php echo $dato4['nombre'] ?></td>
			<td><?php echo $dato4['direccion'] ?></td>
			<td><?php echo $dato4['localidad'] ?></td>
            <td><?php echo $dato4['Vcliente'] ?></td>
			<td>
				<a href='eliminarclie.php?id=<?php echo $dato4['id'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formulariclie.php?id=<?php echo $dato4['id'] ?>'>Editar</a>
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