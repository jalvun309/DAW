<?php

function leer_archivo($nombre_archivo) {
    $contenido = file($nombre_archivo);
    if ($contenido === false) {
        die('Error al leer el archivo.');
    }
    return $contenido;
}