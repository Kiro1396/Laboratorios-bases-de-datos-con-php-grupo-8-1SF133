<?php
include "BasedeDatos.php";

function insertarDatos() {
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];

        $query = "INSERT INTO usuarios(username, contrasena) VALUES ('$username', '$contrasena')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "Registro realizado con éxito";
        } else {
            die('La inserción de los datos ha fallado ' . mysqli_error($connection));
        }

        mysqli_close($connection);
    }
}

function actualizarDatos() {
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];
        $id = $_POST['id'];

        if ((isset($_POST['username'])) && (isset($_POST['contrasena']))) {
            $query = "UPDATE usuarios SET ";
            $query .= "username = '$username', ";
            $query .= "contrasena = '$contrasena' ";
            $query .= "WHERE id=$id ";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die('La actualización de los datos ha fallado ' . mysqli_error($connection));
            } else {
                echo "Registro actualizado con éxito";
            }
        }
    }
}

function borrarDatos() {
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];
        $id = $_POST['id'];

        if ((isset($_POST['username'])) && (isset($_POST['contrasena']))) {
            $query = "DELETE FROM usuarios ";
            $query .= "WHERE id=$id ";

            $result = mysqli_query($connection, $query);

            if (!$result) {
                die('La eliminación de la fila ha fallado ' . mysqli_error($connection));
            } else {
                echo "Registro eliminado con éxito";
            }
        }
    }
}

function mostrarDatos() {
    global $connection;
    $query = "SELECT * FROM usuarios";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('La consulta a la tabla usuarios ha fallado ' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

    mysqli_close($connection);
}

function leerFilas() {
    global $connection;
    $query = "SELECT * FROM usuarios";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('La consulta a la BD ha fallado ' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        print_r("id: " . $row["id"] . " - Usuario: " . $row["username"] . " - Contraseña: " . $row["contrasena"] . "<br>");
    }

    mysqli_close($connection);
}
?>
