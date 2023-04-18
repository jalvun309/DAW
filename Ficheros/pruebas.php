<?php

// Abrir el archivo de texto que contiene los DNIs
$file = fopen("DNI.txt", "r");

while (!feof($file)) {
    $line = fgets($file);
    $dni = substr($line, 0,1);
    echo substr($line, 1,8).$dni;
    echo "\n";

    // Imprimir el DNI en el nuevo formato
    //echo $dni ;
}

// Cerrar el archivo
fclose($file);

?>