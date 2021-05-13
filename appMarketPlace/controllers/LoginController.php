<?php 
// rescatando los valores recibidos por medio de POST
require_once '../models/UsuariosModelo.php';

$usuario =$_POST["usuario"];
$password =$_POST["password"];


$respuesta= UsuariosModelo::LoginUsuariosModelo($usuario, $password);


if ($respuesta ->num_rows == 1) {
	$fila = $respuesta->fetch_assoc();
	//iniciamos sesión
	session_start();
	//creamos una variable de sesión que contenga el usuario, nombre y apellido
	$_SESSION["nombreCompleto"] = $fila["nombreUsuario"] . " " . $fila["apellidoUsuario"];
	$_SESSION["autenticado"]=true;
	$_SESSION["idUsuario"]= $fila["idUsuario"];

	echo 'ok';
} else {
	echo 'error';
}

?>