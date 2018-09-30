<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basedatos = "contacto"

	$conexion = mysqli_connect($servidor, $usuario,"") or die ("No se ha podido ingresar a la Base de Datos");

	$db = mysqli_select_db($conexion, $basedatos) or die ("ALV Prro sigue sin conectar a la base de datos man...");

	//recuperar las variables

	$nombre = $_Post['nombre'];
	$correo = $_Post['correo'];
	$telefono = $_Post['telefono'];
	$mensaje = $_Post['mensaje'];

	$sqli = "INSERT INTO datos VALUES ('$nombre''$correo''$mensaje')";

	$ejecutar = mysqli_query($conexion, $sqli);

	//ejecucion
	if(!$ejecutar){
		echo "error";
	}
	else{
		echo "El formulario a sido enviado! <br><a href="index.html">Volver</a>;
	}
?>