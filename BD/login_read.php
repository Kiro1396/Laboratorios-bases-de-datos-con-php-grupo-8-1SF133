<?php
include "BasedeDatos.php";
include "ModeloBD.php";
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
        <h1 class="text-center">Ver todos los registros</h1>
        <pre>
<?php leerFilas(); ?>
        </pre>
    </div>
</div>
</body>
</html>
