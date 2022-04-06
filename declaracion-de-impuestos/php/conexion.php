<?php 
	function conectarse(){
		$equipo = "localhost";
		$user = "root";
		$pass = "";
		$bd = "declaracion_de_impuestos";

		$conexion = mysqli_connect($equipo, $user, $pass, $bd);
		return $conexion;
	}
?>