<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fonts/css/all.min.css">
	<title>prendas</title>
</head>
<body>

<?php
	include('conexion.php');
	$sel10="SELECT sucursales.id_sucursales, sucursales.nombre, sucursales.localidad, localidad.id_localidad, localidad.nombre AS lnombre, localidad.codigo_postal FROM sucursales INNER JOIN localidad ON sucursales.localidad=localidad.id_localidad";
	//$sel10="SELECT * FROM sucursales";
	$ejec10=$cone->query($sel10);
?>
	<table border="3">
		<tr>
			<th>id_localidad</th>
			<th>nombre de la localidad</th>
            <th>codigo postal</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato10=$ejec10->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato10['id_localidad'] ?></td>
			<td><?php echo $dato10['nombre'] ?></td>
            <td><?php echo $dato10['codigo_postal'] ?></td>
			<td><?php echo $dato10['lnombre'] ?></td>
			<td>
				<a href='eliminarLoca.php?id=<?php echo $dato10['id_localidad'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formularioLoca.php?id=<?php echo $dato10['id_localidad'] ?>'>Editar</a>
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