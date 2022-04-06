<?php 

	include("conexion.php");

	$cedula = $_POST['cedula'];
	$fecha = $_POST['fecha'];
	$nombre_gasto = $_POST['nombre_gasto'];
	$descripcion_gasto = $_POST['descripcion_gasto'];
	$valor_gastos = $_POST['valor_gastos'];

	if($valor_gastos < 5000000){
		$beneficio = (3 * $valor_gastos)/100;
	}else if($valor_gastos >= 5000000){
		$beneficio = (1 * $valor_gastos)/100;
	}

	$link = conectarse();
	$insertar = "INSERT INTO gastos VALUES($cedula,'$fecha','$nombre_gasto','$descripcion_gasto', $valor_gastos, $beneficio)";
	$link->query($insertar);
	header("location:../html/registrar_gastos.html");
?>