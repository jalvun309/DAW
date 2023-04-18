<?php

function subirArchivo($nombreCampo, $directorioDestino) {
    $archivo = $_FILES[$nombreCampo];
    $nombreArchivo = $archivo['name'];
    $tipoArchivo = $archivo['type'];
    $tamañoArchivo = $archivo['size'];
    $tempArchivo = $archivo['tmp_name'];
    $errorArchivo = $archivo['error'];

    // Validar si se subió el archivo correctamente
    if ($errorArchivo !== UPLOAD_ERR_OK) {
        return "Error al subir el archivo.";
    }

    // Validar el tipo de archivo
    $tiposPermitidos = array('image/jpeg', 'image/png', 'image/gif');
    if (!in_array($tipoArchivo, $tiposPermitidos)) {
        return "Tipo de archivo no permitido. Los tipos permitidos son: " . implode(', ', $tiposPermitidos);
    }

    // Validar el tamaño del archivo
    $tamañoMaximo = 2 * 1024 * 1024; // 2 MB
    if ($tamañoArchivo > $tamañoMaximo) {
        return "El archivo es demasiado grande. El tamaño máximo permitido es de " . $tamañoMaximo / (1024 * 1024) . " MB";
    }

    // Validar que el directorio de destino exista
    if (!file_exists($directorioDestino)) {
        return "El directorio de destino no existe.";
    }

    // Mover el archivo al directorio de destino
    $rutaCompletaArchivo = $directorioDestino . "/" . $nombreArchivo;
    if (move_uploaded_file($tempArchivo, $rutaCompletaArchivo)) {
        return "El archivo se subió correctamente.";
    } else {
        return "Error al mover el archivo al directorio de destino.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $directorioDestino = '/ruta/al/directorio/destino';
    $resultado = subirArchivo('nombre_del_campo_file', $directorioDestino);
    echo $resultado;
}