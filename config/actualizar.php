<?php

  if(isset($_POST['actualizar'])){
    $idr = $_POST['idup'];
    $nombre = $_POST['nombred'];
    $apellidos = $_POST['apellidosd'];
    $edad = $_POST['edadd'];
    $correo = $_POST['correod'];

    $consulta = 'UPDATE prueba SET nombre=$1, apellidos=$2, edad=$3, correo=$4 WHERE id=$5';

    $agregar = pg_query_params($conexion, $consulta, array($nombre,$apellidos,$edad,$correo, $idr));
  }

 ?>
