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
                        <th>Evento</th>
                        <th>Cantidad a reservar</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="select" id=""></td>
                        <td>Bocinas satelitales</td>
                        <td>50</td>
                        <td><input type="time" name="" id="" disabled> a <input type="time"></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="number" name="" id="" min="0" max="200"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="select" id=""></td>
                        <td>Microfono inalambrico</td>
                        <td>10</td>
                        <td><input type="time" name="" id=""> a <input type="time" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="number" name="" id="" min="0" max="200"></td>
                    </tr>
                </table>
            </div>
            <button class="reservar">Reservar</button>
        </main>
    </div>
</body>
</html>

