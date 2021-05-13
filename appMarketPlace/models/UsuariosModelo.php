<?php 

require_once 'conexion.php';

class UsuariosModelo {

	static public function LoginUsuariosModelo($usuario, $password) {

		$conexion= conexion::conectar();
		$passwordEncriptada= MD5($password);
		$sql= "SELECT * FROM usuarios WHERE correoUsuario = '$usuario' AND passwordUsuario = '$passwordEncriptada' ";
		$resultado = $conexion->query($sql);
		return $resultado;
	}
}