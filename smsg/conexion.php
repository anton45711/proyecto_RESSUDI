<?php

	$host = "localhost";
	$database = "";

	$user = "";
	$password = "";

	$tabla_db = "mensaje";


	//Parametros
	$conexion_db = mysqli_connect("$host","$user","$password") or die ("No se ha podido conectar a la base de datos.");
	$db = mysqli_select_db($conexion_db,$database) or die ("Base de datos no disponible.");

?>