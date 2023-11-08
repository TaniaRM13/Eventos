<?php

function obtenerMateriales() {
    try {
        //Importar las credenciales
        require 'database.php';

        //Consulta SQL
        $sql = "SELECT * FROM materiales;";

        //Realizar la consulta
        $query = mysqli_query($db, $sql);

        //Acceder a los resultados
        echo "<pre>";
        var_dump(mysqli_fetch_all($query));
        echo "</pre>";
        
        //Cerrar la conexión (opcional)
        mysqli_close($db);

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtenerMateriales();