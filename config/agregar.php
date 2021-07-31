<?php
  if(isset($_POST['guardar'])){
    $nombre = $_POST['nombred'];
    $apellidos = $_POST['apellidosd'];
    $edad = $_POST['edadd'];
    $correo = $_POST['correod'];

    $idl = "SELECT max(id) FROM prueba";
    $obtenerid = pg_query($conexion, $idl);
    $lastid = pg_fetch_array($obtenerid);
    $idn = $lastid[0]+1;

    $agregar = pg_query_params($conexion, 'INSERT INTO prueba VALUES($1,$2,$3,$4,$5)', array($idn, $nombre,$apellidos,$edad,$correo));
  }
 ?>
