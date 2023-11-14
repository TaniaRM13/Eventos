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
    <script src="/scripts/script.js"></script>
</head>
<body class="contenido">
    <div>
        <header class="contenido">
            <h1>Consulta de equipo para eventos</h1>
        </header>
        <main>
            <form action="/includes/inicio.php" method="POST">
                <div class="filtros">
                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" id="fecha">
                    <input type="submit" value="Buscar">
                </div>
            </form>
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
                        $i = 1;
                        while($material = mysqli_fetch_assoc($query)){ ?>
                    <tr class="<?php echo "row" . $i ?>">
                        <td><input class="selector" type="checkbox" name="select" id=""></td>
                        <td><?php echo $material['nombre'] ?></td>
                        <td><?php echo $material['cantidad'] ?></td>
                        <td><input class="entrada" type="time" name="" id="" disabled> a <input class="entrada" type="time" id="" disabled></td>
                        <td><input class="entrada" type="number" name="" id="" min="0" max="200" disabled></td>
                    </tr>
                        <?php $i = $i+1; } ?>
                </table>
            </div>
            <label for="evento">Evento: </label>
            <input type="text" name="evento" id="evento">
            <button class="reservar">Reservar</button>
        </main>
    </div>
</body>
</html>

