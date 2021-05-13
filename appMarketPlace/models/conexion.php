<?php

require_once 'config.php';

class conexion {

	static public function conectar () {
		$con = new mysqli(SERVER, USER, PASS, DB);

		return$con;
	}
}

