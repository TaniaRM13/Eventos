<?php

function obtenerMateriales($tabla) {
    try {
        //Importar las credenciales
        require 'database.php';

        //Consulta SQL
        $sql = "SELECT * FROM " . $tabla . ";";

        //Realizar la consulta
        $query = mysqli_query($db, $sql);

        //Acceder a los resultados
        /*
        echo "<pre>";
        var_dump(mysqli_fetch_all($query));
        echo "</pre>";
        */
        return $query;

    } catch (\Throwable $th) {
        var_dump($th);
    }
}