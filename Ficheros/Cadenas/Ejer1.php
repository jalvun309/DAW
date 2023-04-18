<?php

//Duplicar una cadena de caracteres

function duplicar($cadena){
    $tamaño=strlen($cadena);
    $cadena_auxiliar="";

    for($x=0;$x<$tamaño;$x++){
        $cadena_auxiliar = $cadena_auxiliar . $cadena[$x] . $cadena[$x];
    }

    return $cadena_auxiliar;
}

$cadena="Hola buenas tardes ";

echo duplicar($cadena);

$cadena2="como se encuentra";

$nuevaCadena=$cadena.$cadena2;

echo $nuevaCadena;