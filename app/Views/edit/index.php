<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Agenda de Contactos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container mt-4">
    <div class="card text-white bg-secondary">
  <div class="card-header">Editar Contacto</div>
  <div class="card-body">
    <h4 class="card-title">Editar un contacto desde el formulario</h4>
        <form method="post" action="/edit/editar">
            <input type="hidden" name="id" value="<?=$id?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"
                    name="nombre"
                    value="<?=$nombre?>"
                >
                
            </div>
            <div class="form-group">
                <label for="empresa">Empresa</label>
                <input type="text" class="form-control" id="empresa"
                    name="empresa"
                    value="<?=$empresa?>"
                >
                
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="number" class="form-control" id="telefono"
                    name="telefono"
                    value="<?=$telefono?>"
                >
                
            </div>
            
            <button type="submit" class="btn btn-outline-info mr-2">Editar</button>
            <a href="/contactos" class="btn btn-outline-danger">Cancelar</a>
        </form>
  </div>
</div>
</div>