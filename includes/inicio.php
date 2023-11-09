<?php
    require 'funciones.php';

    $query = obtenerMateriales("materiales");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de eventos</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body class="contenido">
    <div>
        <header class="contenido">
            <h1>Consulta de equipo para eventos</h1>
        </header>
        <main>
            <div class="filtros">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha">
                <input type="button" value="Buscar">
            </div>
            <h3>Resultado de la busqueda: </h3>
            <div class="resultados">
                <table>
                    <tr>
                        <th>Seleccionar</th>
                        <th>Material</th>
                        <th>Cantidad disponible</th>
                        <th>Horario de ocupación</th>
                        <th>Cantidad a reservar</th>
                    </tr>
                    <?php
                        while($material = mysqli_fetch_assoc($query)){ ?>
                    <tr>
                        <td><input type="checkbox" name="select" id=""></td>
                        <td><?php echo $material['nombre'] ?></td>
                        <td><?php echo $material['cantidad'] ?></td>
                        <td><input type="time" name="" id="" disabled> a <input type="time"></td>
                        <td><input type="number" name="" id="" min="0" max="200"></td>
                    </tr>
                        <?php } ?>
                </table>
            </div>
            <label for="evento">Evento: </label>
            <input type="text" name="evento" id="evento">
            <button class="reservar">Reservar</button>
        </main>
    </div>
</body>
</html>

