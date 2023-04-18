<?php

// Abrir el archivo de texto que contiene los DNIs
$file = fopen("DNI.txt", "r");

while (!feof($file)) {
    $line = fgets($file);
    $dni = substr($line, 0,1);
    echo pruebas . phpsubstr($line, 1, 8);
    echo "\n";

    // Imprimir el DNI en el nuevo formato
    //echo $dni ;
}

// Cerrar el archivo
fclose($file);

?>