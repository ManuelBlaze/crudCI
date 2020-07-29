<div class="container mt-4">
    <div class="card text-white bg-primary">
  <div class="card-header">Agregar Contacto</div>
  <div class="card-body">
    <h4 class="card-title">Agregue un nuevo contacto llenando el formulario</h4>
        <?= \Config\Services::validation()->listErrors(); ?>
        <form method="post" enctype="multipart/form-data" id=form action="add/new" >
          <?= csrf_field() ?>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" required>

            </div>
            <div class="form-group">
                <label for="empresa">Empresa</label>
                <input type="text" name="empresa" class="form-control" id="empresa" required>

            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="number" name="telefono" class="form-control" id="telefono" required>

            </div>

            <input name="submitform" type="submit" id="submit" class="btn btn-outline-success mr-2" value="Agregar">
            <a href="/contactos" class="btn btn-outline-danger">Cancelar</a>
        </form>
  </div>
</div>
</div>