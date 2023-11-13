<?php
include ('conexion.php');
$sele="SELECT id_cliente,nombre_cliente,direccion,localidad FROM cliente ";
$rta=$cone->query($sele);

$sele1="SELECT  ventas, prenda, clientes, sucursales FROM ventas";
$rta1=$cone->query($sele1);

$sele2="SELECT  id_sucursales,nombre,localidad FROM sucursales";
$rta2=$cone->query($sele2);

$sele3="SELECT  id_localidad,nombre,codigo_postal FROM localidad";
$rta3=$cone->query($sele3);

$sele4="SELECT id_prenda,marca,vestimenta,proveedor,talles,precios,cantidad FROM prendas ";
$rta4=$cone->query($sele4);

$sele5="SELECT id_vestimenta,nombre_vestimenta FROM vestimenta";
$rta5=$cone->query($sele5);

$sele6="SELECT id_marca,nombre_marca FROM marcas";
$rta6=$cone->query($sele6);

$sele7="SELECT id_talle,numero_talla FROM talles";
$rta7=$cone->query($sele7);

$sele8="SELECT id_proveedor,nombre_pro FROM proveedor";
$rta8=$cone->query($sele8);
?>
------------------------------------------------------------------------------------------------------------------------------------------------------
<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Tienda de Indumentaria</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body bgcolor="#dee3f3">
  <h3>ROPA</h3>
  <form action="guardar_cliente.php" method="get">
  Ingrese el cliente 
		<input type="text" name="cliente">
		<br>
		Ingrese la Localidad 
<input type="text" name="localidad"><br>
		<select name="localidad">
			<option value="0">Selecciona una Localidad</option>
                    <?php 
                        while($dato4= $rta->fetch_assoc()) {
                            echo "<option value='".$dato4["id_cliente"]."'>".$dato4["nombre_cliente"]." ".$dato4['direccion']."".$dat4['localidad']."</option>";
                                }
                    ?>
        </select>
		<br>
		Ingrese la direccion
		<input type="text" name="direccion">
		<br>
		<input type="submit" name="" value="Guardar">
	</form>
	<br>
	<a href="mostrarcliente.php"><button>Lista</button> </a>
	<br>
	<br>
	<hr>

	<h3>Sucursales</h3>
  <form action="guardarsucur.php" method="get">
  Ingrese el nombre de la sucursal
		<input type="text" name="nombre">
		<br>
		Ingrese la Localidad
<input type="text" name="localidad">
<br>
		<select name="localidad">
			<option value="0">Seleccione la localidad</option>
                    <?php
                        while($dato8= $rta2->fetch_assoc()) {
                            echo "<option value='".$dato8["id_sucursales"]."'>".$dato8["nombre"]." ".$dato8['localidad']."</option>";
                                }
                    ?>
        </select>
		<br>
		<input type="submit" name="" value="Guardar">
		<a href="mostrarsucu.php"><button>Lista</button> </a>
  </form>
	<br>
	<hr>

	<h3>Localidad</h3>
  <form action="guardarlocali.php" method="get">
		<br>
		Ingrese la Localidad
<input type="text" name="localidad"><br>
		<select name="localidad">
			<option value="0">Selecciona una Localidad</option>
                    <?php 
                        while($dato5= $rta3->fetch_assoc()) {
                            echo "<option value='".$dato5["id_localidad"]."'>".$dato5["nombre_De_la_localidad"].""</option>";
                                }
                    ?>
        </select>
		<br>
		Ingrese el codigo postal
		<input type="text" name="codigo">
		<br>
		<input type="submit" name="" value="Guardar">
	</form>
	<br>
	<a href="mostrarLoca.php"><button>Lista</button> </a>
	<br>
	<hr>

<h3>MARCAS</h3>
  <form action="guardarmarca.php" method="get">
		Ingrese el nombre de la marca
		<select name="marca">
			<option value="0">Selecciona una marca</option>
                    <?php 
                        while($dato6= $rta6->fetch_assoc()) {
                            echo "<option value='".$dato6["id_marca"]."'>".$dato6["nombre_marca"]."</option>";}?>
		<br>
		<input type="submit" name="" value="Guardar">
	</form>
	<br>
	<a href="mostrarmarca.php"><button>Lista</button> </a>
	<br>
	<hr>
	<h3>Talles</h3>
	<form action="guardarTalle.php" method="get">
	<select name="talle">
			<option value="0">Seleccione el talle</option>
                    <?php 
                        while($dato7= $rta7->fetch_assoc()) {
                            echo "<option value='".$dato7["id_talle"]."'>".$dato7["numero_talla"]."</option>";}?>
		<br>
		<input type="submit" name=" " value="Guardar">
	</form>
	<a href="mostrarTalles.php"><button>Lista</button> </a><br>
	<hr>

<h3>Proveedor</h3>
	 <form action="guardarPro.php" method="get">
	 <input type="text" name="proveedor">
		<br>
		<input type="submit" name=" " value="Guardar">
	</form>
	<a href="mostrarPro.php"><button>Lista</button> </a><br>
	<hr>

	<h3>ventas</h3>
	<form action="guardarventas.php" method="get">
	<input type="text" name="ventas">
	 Ingrese el cliente 
		<select name="cliente">
			<option value="0">Selecciona el cliente</option>
                    <?php 
                        while($cliente= $rta
->fetch_assoc()) {
                           echo "<option value='".$cliente"id_cliente"]."'>".$cliente["nombre_cliente"]." ".$cliente['direccion']."</option>";
                                }
                    ?>
        </select>
ingrese la prenda 
<input type="text" name="prenda">

	<a href="mostrarventas.php"><button>Lista</button></a>
	</form>
</body>
</html>