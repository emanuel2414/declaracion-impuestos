<?php 
	function conectarse(){
		$equipo = "iam0btyu0h0n.us-east-2.psdb.cloud";
		$user = "ygj0ywko0idq";
		$pass = "pscale_pw_JbAg-n3_FpePVFlDgb31FuatwoBiJGHFDy9AXFU93ww";
		$bd = "declaracion_de_impuestos";

		$conexion = mysqli_connect($equipo, $user, $pass, $bd);
		return $conexion;
	}
?>