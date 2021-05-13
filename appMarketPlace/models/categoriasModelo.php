<?php 
require_once 'conexion.php';
class categoriasModelo {
	static public function listarCategoriasModel () {
		//creamos una variable que contiene la conexion
		$conexion= conexion::conectar();
		//creamos una variable consulta
        $sql= "SELECT * FROM categorias";
        //ejecutamos en la conexion la consulta y guardamos el resultado de la consulta en una variable
        $resultado= $conexion->query($sql);
        //retornamos el resultado de la consulta
        return $resultado;
	}
}