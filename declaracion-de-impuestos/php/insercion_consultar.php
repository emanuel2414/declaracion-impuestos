<?php 
	
	include("conexion.php");
	$fecha = $_POST['fecha'];

	$link = conectarse();
	$seleccionar = "SELECT * FROM gastos WHERE fecha='$fecha'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
	<title>Base de datos</title>
</head>
<body>
	<header>
		<div class="contenido_titulo">
			<h1>Base de datos</h1>
		</div>
		<div class="contenido_menu">
			<ul>
				<li><a href="../html/consultar_registros.html">Inicio</a></li>
				<li><a href="../html/registrar_ingresos.html">Ingresos</a></li>
				<li><a href="../html/registrar_gastos.html">Gastos</a></li>
				<li><a href="../html/consultar_registros.html">Consultar Registros</a></li>
				<li><a href="#">Desarrolladores</a></li>
			</ul>
		</div>
	</header>
	<section class="consultado">
		<div class="contenedor_tabla">
			<table>
				<caption>Información de la base de datos</caption>
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Fecha</th>
						<th>Nombre Gastos</th>
						<th>Descripción Gastos</th>
						<th>Valor Gastos</th>
						<th>Beneficio</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($link->query($seleccionar) as $row) { ?>
						<tr>
							<td><?php echo $row['cedula'] ?></td>
							<td><?php echo $row['fecha'] ?></td>
							<td><?php echo $row['nombre_gasto'] ?></td>
							<td><?php echo $row['descripcion_gasto'] ?></td>
							<td><?php echo $row['valor_gastos'] ?></td>
							<td><?php echo $row['beneficio'] ?></td>
						</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</section>
</body>
</html>