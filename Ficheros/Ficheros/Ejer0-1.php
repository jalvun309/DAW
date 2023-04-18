<?php

//La primera función comprueba la existencia del archivo
$miArchivo='../Archivos/Archivo.txt';

if(file_exists($miArchivo)){
    echo "Existe el fichero";
    echo $miArchivo;
    $fp=fopen($miArchivo,"r");
    fclose($fp);
}else{
    echo "No existe";
}

//La segunda función comprueba lo contrario gracias a !
if(!file_exists($miArchivo)){
    echo "No existe";
}else{
    echo "existe el ficehro";
    echo $miArchivo;
    $fp=fopen($miArchivo,"r");
    fclose($fp);
}