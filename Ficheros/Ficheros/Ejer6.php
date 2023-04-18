<?php

$file_path = '../Archivos/archivo.txt';

$file = fopen($file_path, 'w');

if ($file === false) {
    echo 'Error al abrir el archivo.';
    exit;
}

$new_content = '';

if (fwrite($file, $new_content) === false) {
    echo 'Error al escribir en el archivo.';
    exit;
}

fclose($file);

echo 'El archivo ha sido sobrescrito y machacado correctamente.';
?>