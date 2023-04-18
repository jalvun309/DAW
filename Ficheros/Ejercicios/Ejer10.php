<?php

// Función para actualizar un archivo con fseek
function actualizar_archivo($nombre_archivo, $nuevo_contenido, $posicion) {
    $archivo = fopen($nombre_archivo, 'r+');
    if ($archivo === false) {
        die('Error al abrir el archivo.');
    }
    fseek($archivo, $posicion);
    if (fwrite($archivo, $nuevo_contenido) === false) {
        die('Error al escribir en el archivo.');
    }
    fclose($archivo);
}

// Función para mover el puntero a una posición específica en un archivo
function mover_puntero($nombre_archivo, $posicion) {
    $archivo = fopen($nombre_archivo, 'r');
    if ($archivo === false) {
        die('Error al abrir el archivo.');
    }
    fseek($archivo, $posicion);
    $contenido = fread($archivo, filesize($nombre_archivo));
    fclose($archivo);
    return $contenido;
}