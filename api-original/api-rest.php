<?php

// Verifica si la solicitud es una petición GET
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405); // Método no permitido
    exit();
}

$recursoEjemplo = array(
    'id' => 1,
    'nombre' => 'Kenneth Gutierrez',
    'descripcion' => 'Recurso de ejemplo - API REST con la accion GET.'
);

// Establece la cabecera de respuesta como JSON
header('Content-Type: application/json');

// Devuelve el recurso como respuesta
echo json_encode($recursoEjemplo);

?>
