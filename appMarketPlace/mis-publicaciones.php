<?php
require_once "controllers/SeguridadController.php";
require_once "controllers/ArticulosController.php";
require_once "models/ArticulosModelo.php";
require_once "models/categoriasModelo.php";
require_once "controllers/categoriasController.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="views/">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mis publicaciones</title>
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/d5ff5de35b.js"></script>
	<link rel="stylesheet" href="dist/css/estilos.css">
</head>
<body>
	<?php require_once "views/header.php"; ?>

	<div class="container-xl mt-3">
		<div class="row">
			<div class="col-md-6">
				<h1>
				Gestión de Publicaciones
				</h1>
			</div>
			<div class="col-md-6 d-flex justify-content-end">
				<button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalInsertarArticulo">
					Crear Publicación
				</button>
			</div>
		</div>
		<hr>
		<div class="row">

			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Título</th>
						<th>Precio</th>
						<th>Disponibilidad</th>
						<th>Categoria</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>

					<?php 
					$articulos= ArticulosController::ListarArticulosPorUsuario($_SESSION["idUsuario"]);

					while ($fila= $articulos->fetch_array()) {
						echo '<tr>
						<td>'.$fila[0].'</td>
						<td>'.$fila[1].'</td>
						<td>'.$fila[2].'</td>
						<td>'.$fila[3].'</td>
						<td>'.$fila[4].'</td>
						<td>
							<button class="btn btn-outline-info btn-sm">Editar</button>
							<button class="btn btn-danger btn-sm">Eliminar</button>
						</td>
					</tr>';
					}

					?>
				</tbody>
			</table>
		</div>
	</div>


	<?php require 'views/modales.php'; ?>
	<script type="text/javascript" src="dist/js/bootstrap.bundle.js"></script>
</body>
</html>
