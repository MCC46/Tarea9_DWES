<?php
/**
 * Clase GestorRickAndMorty
 * Procesa la obtención de datos desde la API REST.
 */

/**
 * Recupera una lista de personajes filtrados por estado.
 * @param string $status Filtro opcional por estado.
 * @return array Conjunto de personajes procesados.
 */
function obtenerPersonajes($status = 'alive') {
    $url = "https://rickandmortyapi.com/api/character/?status=" . $status;
    $json = @file_get_contents($url);
    
    if ($json === false) {
        return [];
    }

    $datos = json_decode($json, true);
    return isset($datos['results']) ? $datos['results'] : [];
}
?>