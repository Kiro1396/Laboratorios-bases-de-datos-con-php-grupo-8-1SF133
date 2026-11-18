<?php
include "BasedeDatos.php";
include "ModeloBD.php";
borrarDatos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Eliminar Registro</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena">
            </div>
            <div class="form-group">
                <select name="id" id="">
                    <?php
                    mostrarDatos();
                    ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Eliminar">
        </form>
    </div>
</div>
</body>
</html>
