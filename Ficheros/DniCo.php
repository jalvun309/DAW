<?php

// Abrir el archivo de texto que contiene los DNIs
$file = fopen("DNI.txt", "r");

// Leer el contenido del archivo línea por línea y calcular la letra correspondiente para cada DNI
while (!feof($file)) {
    $line = fgets($file);
    $dni = substr($line, 0, -1);

    // Calcular la letra correspondiente para el DNI
    $letra = calcularLetraDNI($dni);

    // Imprimir el DNI con la letra correspondiente en la posición correcta
    echo substr($dni, 0, -1) . $letra . "<br>";
}

// Cerrar el archivo
fclose($file);

// Función para calcular la letra correspondiente a un DNI
function calcularLetraDNI($dni) {
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    $posicion = substr($dni, 0, 1);
    return $letras[$posicion];
}

