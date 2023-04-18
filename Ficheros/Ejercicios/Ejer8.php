<?php

function crear_archivo($nombre_archivo, $contenido) {
    $archivo = fopen($nombre_archivo, 'w');
    if ($archivo === false) {
        die('Error al crear el archivo.');
    }
    if (fwrite($archivo, $contenido) === false) {
        die('Error al escribir en el archivo.');
    }
    fclose($archivo);
}

function mostrar_error($mensaje) {
    echo $mensaje;
    exit;
}