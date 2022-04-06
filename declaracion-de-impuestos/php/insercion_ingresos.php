<?php 

	include("conexion.php");

	$cedula = $_POST['cedula'];
	$fecha = $_POST['fecha'];
	$nombre_ingreso = $_POST['nombre_ingreso'];
	$descripcion_ingreso = $_POST['descripcion_ingreso'];
	$ingreso_mensual = $_POST['ingreso_mensual'];

	if($ingreso_mensual < 1000000){
		$impuestos = (2 * $ingreso_mensual)/100;
	}else if($ingreso_mensual > 1000000 && $ingreso_mensual < 5000000){
		$impuestos = (3 * $ingreso_mensual)/100;
	}else if($ingreso_mensual > 5000000){
		$impuestos = (5 * $ingreso_mensual)/100;
	}

	$link = conectarse();
	$insertar = "INSERT INTO ingresos VALUES($cedula,'$fecha','$nombre_ingreso','$descripcion_ingreso', $ingreso_mensual, $impuestos)";
	$link->query($insertar);
	header("location:../html/registrar_ingresos.html");
?>