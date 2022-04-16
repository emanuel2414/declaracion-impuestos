<?php 
	function conectarse(){
		$equipo = "bmkrhyg9bmg0c1y3uzbj-mysql.services.clever-cloud.com";
		$user = "uqdvesmp5f8wrfqw";
		$pass = "vulGUZBJ64WujPJKmQF6";
		$bd = "bmkrhyg9bmg0c1y3uzbj";

		$conexion = mysqli_connect($equipo, $user, $pass, $bd);
		return $conexion;
	}
?>