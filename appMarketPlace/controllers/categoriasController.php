<?php

class categoriasController {

	static public function listarCategoriasController () {
		$resultado = categoriasModelo::listarCategoriasModel();

		return $resultado;
	}
}

