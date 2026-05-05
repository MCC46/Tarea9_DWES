<?php
/**
 * Clase GestorRickAndMorty
 * Procesa la obtención de datos desde la API REST usando cURL para mayor seguridad.
 */

/**
 * Recupera una lista de personajes filtrados por estado.
 * @param string $status Filtro opcional por estado.
 * @return array Conjunto de personajes procesados.
 */
function obtenerPersonajes($status = 'alive') {
    $url = "https://rickandmortyapi.com/api/character/?status=" . $status;

    // 1. Iniciamos la sesión cURL
    $ch = curl_init();

    // 2. Configuración de opciones seguras y robustas
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Devuelve el resultado como string
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);          // Timeout de 10 segundos 
    
    // Gestión de SSL 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

    // 3. Ejecutamos la petición
    $response = curl_exec($ch);

    // 4. Verificación de errores
    if (curl_errno($ch)) {
        // Si hay un error, lo ideal sería registrarlo, aquí devolvemos vacío
        return [];
    }

    // 5. Cerramos la sesión cURL
    curl_close($ch);

    // 6. Procesamos el JSON
    $datos = json_decode($response, true);
    return isset($datos['results']) ? $datos['results'] : [];
}
?>
