<?php

  if(isset($_POST['delete'])){
    $idel = $_POST['idelete'];
    $consdel = "DELETE FROM prueba WHERE id=$idel";

    $eliminar = pg_query($conexion, $consdel);
  }

 ?>
