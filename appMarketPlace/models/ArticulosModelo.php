<?php 

require_once 'conexion.php';

class ArticulosModelo {

	static public function ListarArticulosModelo (){
		$conexion = conexion::conectar();

		$sql ="SELECT a.idArticulo, a.tituloArticulo, a.precioArticulo, a.disponibilidadArticulo, a.imgArticulo, c.nombreCategoria 
            FROM articulos a INNER JOIN categorias c
            ON a.idCategoria = c.idCategoria
            ORDER BY a.fechaPublicacionArticulo DESC";
		$resultado=  $conexion->query($sql);

		return $resultado;
	}
	static public function ListarArticulosPorCategoriaModelo ($idCategoria, $order){
		$conexion = conexion::conectar();

		$sql ="SELECT a.idArticulo, a.tituloArticulo, a.precioArticulo, a.disponibilidadArticulo, a.imgArticulo, c.nombreCategoria
            FROM articulos a INNER JOIN categorias c
            ON a.idCategoria = c.idCategoria
            WHERE a.idCategoria= $idCategoria
            ORDER BY a.precioArticulo ASC";
		$resultado=  $conexion->query($sql);

		return $resultado;
	}
      static public function ListarArticulosPorPalabraClaveModelo ($palabraClave) {
            $conexion= conexion::conectar();

            $sql ="SELECT a.idArticulo, a.tituloArticulo, a.precioArticulo, a.disponibilidadArticulo, a.imgArticulo, c.nombreCategoria
            FROM articulos a INNER JOIN categorias c
            ON a.idCategoria = c.idCategoria
            WHERE a.tituloArticulo LIKE '%$palabraClave%'";
            $resultado=  $conexion->query($sql);

            return $resultado;
      }
      static public function ListarArticulosPorUsuarioModelo ($idUsuario) {
            $conexion= conexion::conectar();

            $sql =$sql = "SELECT a.idArticulo, a.tituloArticulo, a.precioArticulo, a.disponibilidadArticulo, c.nombreCategoria
            FROM articulos a 
            INNER JOIN categorias c
            ON a.idCategoria = c.idCategoria
             WHERE a.idUsuario = $idUsuario";
            $resultado=  $conexion->query($sql);

            return $resultado;
      }
}