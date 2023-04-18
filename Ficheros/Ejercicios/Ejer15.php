<?php

function obtenerInformacionArchivo($rutaArchivo) {
    // Obtener la información del archivo con la función stat()
    $informacionArchivo = stat($rutaArchivo);

    // Crear un arreglo con los nombres de los campos y sus valores
    $informacionFormateada = array(
        "Nombre" => basename($rutaArchivo),
        "Tamaño" => $informacionArchivo[7],
        "Propietario" => $informacionArchivo[4],
        "Grupo" => $informacionArchivo[5],
        "Permisos" => sprintf("%o", $informacionArchivo[2]),
        "Último acceso" => date("Y-m-d H:i:s", $informacionArchivo[8]),
        "Última modificación" => date("Y-m-d H:i:s", $informacionArchivo[9]),
        "Último cambio de estado" => date("Y-m-d H:i:s", $informacionArchivo[10]),
    );

    // Devolver el arreglo con la información formateada
    return $informacionFormateada;
}

$rutaArchivo = "../Archivos/archivo.txt";
$informacionArchivo = obtenerInformacionArchivo($rutaArchivo);
print_r($informacionArchivo);