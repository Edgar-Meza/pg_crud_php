# CRUD PostgreSQL y PHP
Este es una página la cual permite realizar operaciones CRUD(Create, Read, Update y Delete) con PostgreSQL, PHP y JavaScript

Cambiar los párametros del archivo `db.php` en la carpeta `config` para poder realizar la conexión con tu base de datos PostgreSQL

~~~
    $server = "servername";
    $user = "username";
    $pass = "password";
    $db = "dbname";
    $port = "port";
~~~

## Tabla de inicio donde se muestran los registros de la DB (operación Read)
![tabla de inicio](./assets/tabla.png "tabla de incio")

## Formulario para crear un nuevo registro (operación Create)
![nuevo registro](./assets/agregar.png "agregar registro")

## Formulario para actualizar los datos de un registro (operación Update)
![actualizar registro](./assets/actualizar.png "actualizar un registro")

## Eliminar un registro de la DB (operación Delete)
![eliminar un registro](./assets/eliminar.png "eliminar un registro")