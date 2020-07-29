<div class="text-center mt-5">
    <a href="/add" class="btn btn-lg btn-success"><i class="fa fa-user-plus" aria-hidden="true"></i> Agregar</a>
</div>

<div class="container">
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Acciones</th>
      <th scope="col">Nombre</th>
      <th scope="col">Empresa</th>
      <th scope="col">Télefono</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(isset($contactos)) {
        foreach ($contactos as $contacto) {
          ?>
            <tr>
              <td>
                  <div class="text-center">
                      <a href="/edit/index/<?=$contacto["id"]?>" class="btn btn-info">
                          <i class="fas fa-pen"></i>
                      </a>
                      <a href="delete/delete/<?=$contacto["id"]?>" data-id="<?php echo $contacto["id"] ?>" class="btn-borrar btn btn-danger">
                        <i class="fas fa-trash"></i>
                      </a>
                  </div>
              </td>
              <td><?=$contacto['nombre']?></td>
              <td><?=$contacto['empresa']?></td>
              <td><?=$contacto['telefono']?></td>
            </tr>
          <?php
        }
      }
    ?>   
  </tbody>
</table>
</div>