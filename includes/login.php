<?php
    require 'funciones.php';

    $query = obtenerMateriales("usuarios");

    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Control de eventos</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <main class="acceso contenido">
        <h3>Inicio de sesión</h3>
        <form method="POST" action="/includes/login.php">
        <div class="field user">
            <label for="usuario">Usuario: </label>
            <input type="text" name="user" id="user">
        </div>
        <div class="field password">
            <label for="psswd">Contraseña: </label>
            <input type="password" name="psswd" id="psswd">
        </div>
        <input type="submit" value="Ingresar">
        </form>
    </main>
</body>
</html>