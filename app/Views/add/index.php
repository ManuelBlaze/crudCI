<div class="container mt-4">
    <div class="card text-white bg-primary">
  <div class="card-header">Agregar Contacto</div>
  <div class="card-body">
    <h4 class="card-title">Agregue un nuevo contacto llenando el formulario</h4>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre">
                
            </div>
            <div class="form-group">
                <label for="empresa">Empresa</label>
                <input type="text" class="form-control" id="empresa">
                
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="number" class="form-control" id="telefono">
                
            </div>
            
            <button type="submit" class="btn btn-outline-success mr-2">Agregar</button>
            <a href="/contactos" class="btn btn-outline-danger">Cancelar</a>
        </form>
  </div>
</div>
</div>