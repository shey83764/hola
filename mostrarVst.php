<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fonts/css/all.min.css">
	<title>vestimenta</title>
</head>
<body>

<?php
	include('conexion.php');
	$sel13="SELECT vestimenta.id_vestimenta,vestimenta.nombre_vestienta,prenda.id_prenda,prenda.marca,prenda.vestimenta AS Pvesti FROM vestimenta INNER JOIN prenda ON nombre_vestimenta.prenda=prenda.vestimenta";
	$ejec13=$cone->query($sel13);
?>
	<table border="3">
		<tr>
			<th>id_vestimenta</th>
			<th>nombre_vestimenta</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato13=$ejec13->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato13['id_talle'] ?></td>
			<td><?php echo $dato13['numero_talla'] ?></td>
			<td><?php echo $dato12['Pvesti'] ?></td>
			<td>
				<a href='eliminarVst.php?id=<?php echo $dato13['id'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formularioVst.php?id=<?php echo $dato13['id'] ?>'>Editar</a>
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