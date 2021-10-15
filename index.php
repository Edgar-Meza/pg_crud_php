<?php include('config/db.php');
      include('config/agregar.php');
      include('config/eliminar.php');
      include('config/actualizar.php');
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>CRUD PostgreSQL</title>
    <script src="js/funciones.js"></script>
  </head>
  <body>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top barnav">
        <div class="container-fluid row">
          <div class="col-lg-1 col-md-1 col-sm-12 text-center">
            <span class="text-light">Logo</span>
          </div>
          <div class="col-lg-11 col-md-11 col-sm-12 text-center btn-agregar" onclick="nuevo()">
            <span class="bi-plus-circle" data-bs-toggle="modal" data-bs-target="#datos"></span>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <table class="table table-hover">
          <thead class="cabecera table-light">
            <tr>
              <th scope="col">id</th>
              <th scope="col">nombre</th>
              <th scope="col">apellidos</th>
              <th scope="col">edad</th>
              <th scope="col">correo</th>
              <th scope="col" class="text-center">Editar</th>
              <th scope="col" class="text-center">Eliminar</th>
            </tr>
          </thead>
          <tbody style="border-style: hidden">
              <?php

                $datostab = "SELECT * FROM prueba order by id";
                $ejecutar = pg_query($conexion, $datostab);

                while($tabla = pg_fetch_array($ejecutar)){
                  echo "<tr><td scope='row'>".$tabla[0]."</td>
                        <td>".$tabla[1]."</td>
                        <td>".$tabla[2]."</td>
                        <td>".$tabla[3]."</td>
                        <td>".$tabla[4]."</td>
                        <td class='text-primary btn-actualizar p-0 text-center' data-bs-toggle='modal' data-bs-target='#datos' onclick='actualizar(".$tabla[0].",\"".$tabla[1]."\",\"".$tabla[2]."\",".$tabla[3].",\"".$tabla[4]."\")'><span class='bi-pencil-square'></span></td>
                        <td class='text-danger btn-eliminar p-0 text-center' data-bs-toggle='modal' data-bs-target='#eliminar' onclick='eliminar(".$tabla[0].")'><span class='bi-trash'></span></td></tr>";
                }
               ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="modal fade" id="datos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="titulo">Agregar Dato</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
          </div>
          <div class="modal-body">
            <form class="form" method="post">
              <div class="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" oninput="d_nombre()">
              </div>
              <div class="form-group">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" oninput="d_apellidos()">
              </div>
              <div class="form-group">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" name="edad" id="edad" class="form-control" oninput="d_edad()">
              </div>
              <div class="form-group">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" oninput="d_correo()">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <form method="post">
              <input type="hidden" name="idup" id="idup">
              <input type="hidden" id="nombred" name="nombred">
              <input type="hidden" id="apellidosd" name="apellidosd">
              <input type="hidden" id="edadd" name="edadd">
              <input type="hidden" id="correod" name="correod">
              <input type="submit" class="btn btn-success" name="guardar" value="Guardar" id="save">
              <input type="submit" class="btn btn-success" name="actualizar" value="Actualizar" style="display:none" id="update">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="eliminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="titdel">Elimniar registro</h4>
            <button type="button" class="btn-close" bata-bs-dismiss="modal" aria-label="close"></button>
          </div>
          <div class="modal-body">
            <h5>¿Deseas eliminar el registro?</h5>
          </div>
          <div class="modal-footer">
            <button type="button" name="cancelar" class="btn btn-danger" data-bs-dismiss="modal" aria-label="close">Cancelar</button>
            <form method="post">
              <input type="hidden" name="idelete" id="idelete">
              <input type="submit" name="delete" value="Aceptar" class="btn btn-success">
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
