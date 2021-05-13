<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mensaje">Iniciar Sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
              <form id="formularioIniciarSesion">
        <div class="mb-3">
          <label for="usuario" class="form-label">Correo Electonico</label>
          <input type="email" name="usuario" class="form-control" id="usuario" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-outline-primary">Entrar</button>
        </div>
        
      </form>


      </div>
      
    </div>
  </div>
</div>

<!--MODAL INSERTAR ARTICULOS-->

<div class="modal fade" id="modalInsertarArticulo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese un nuevo artículo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
        <form id="formularioInsertarArticulo">
          <div class="row">
           <div class="col-md-9">
            <input type="text" class="form-control" placeholder="Titulo Ej: Figura Dragonball" name="titulo" required>
             </div>
                <div class="col-md-3">
                 <input type="text" class="form-control" placeholder="Precio" name="precio">
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-4">
              <select name="categorias" class="form-select" required>
          <option value="">--Seleccionar Categoria--</option>
          <?php 
              $resultado = categoriasController::listarCategoriasController();
              while ($fila= $resultado->fetch_assoc()) {

                echo '<option value="' . $fila["idCategoria"] . '">' . $fila["nombreCategoria"] . '</option>';
              }
           ?>

        </select>
            </div>
            <div class="col-md-4">
              <select class="form-select" name="estado" required>
                <option value="">Seleccione estado</option>
                <option value="1">Nuevo</option>
                <option value="2">Usado casi nuevo</option>
                <option value="3">Usado en buen estado</option>
                <option value="4">Usado aceptable</option>
              </select>
            </div>
            <div class="col-md-4">
              <select class="form-select" name="disponibilidad">
                <option value="1">Disponible</option>
                <option value="0">Agotado</option>
              </select>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <textarea name="descripcion" rows="5" class="form-control" required placeholder="Descripcion Artículo"></textarea>
            </div>
              <div class="col-12">
                <label class="form-label">Solo ingresar formato de imagen JPG, JPEG, PNG</label>
                <input type="file" class="form-control" required>
              <div class="row mt-2">
                <div class="col-12 d-grid">
                  <button class="btn btn-outline-primary" type="submit">Guardar artículo</button>
                </div>
              </div>
            </div>
          </div>

        </form>

      </div>  
    </div>
  </div>
</div>