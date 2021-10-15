<?php
    $server = "servername";
    $user = "username";
    $pass = "password";
    $db = "dbname";
    $port = "port";
    
    $conexion = pg_connect("host=".$server." port=".$port." dbname=".$db." user=".$user." password=".$pass);

 ?>
