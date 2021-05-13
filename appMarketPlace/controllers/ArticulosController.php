<?php 

class ArticulosController {

	static public function ListarArticulosCtl () {

		$resultado= ArticulosModelo::ListarArticulosModelo();

		return $resultado;
	}
	static public function ListarArticulosPorCategoria ($idCategoria, $order) {

		$resultado= ArticulosModelo::ListarArticulosPorCategoriaModelo($idCategoria, $order);

		return $resultado;
	}

	static public function ListarArticulosPorPalabraClave($palabraClave) {

		$resultado= ArticulosModelo::ListarArticulosPorPalabraClaveModelo($palabraClave);

		return $resultado;
	}
	static public function ListarArticulosPorUsuario($idUsuario) {

		$resultado= ArticulosModelo::ListarArticulosPorUsuarioModelo($idUsuario);

		return $resultado;
	}
}