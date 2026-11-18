<?php

$connection = mysqli_connect('localhost', 'root', '', 'login');

if ($connection) {
    echo "Conexión a la Base de Datos exitosa";
} else {
    die("Conexion a la Base de Datos ha fallado");
}

?>
