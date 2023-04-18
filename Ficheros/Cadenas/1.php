<?php

function duplicar_caracteres($cadena) {
    $tamaño = strlen($cadena);
    $cadena_auxiliar = "";
    for( $x=0; $x < $tamaño; $x++) {
        $cadena_auxiliar = $cadena_auxiliar . $cadena[$x] . $cadena[$x];
    }
    return $cadena_auxiliar;
}
$cadena = "cadena de caracteres a duplicar";
echo " Esta es la >>>> $cadena";
echo "<br/>";
echo duplicar_caracteres($cadena);
echo "<br/>";
echo "La de arriba es la cadena duplicada";
echo "<br/>";

$cadena2="..... pero esta que lees no es la anterior....";
echo "ahora salen las dos cadenas concatenadas con el punto ( . )";
echo "<br/>";
$nuevaCadenaLarga= $cadena .$cadena2;
echo $nuevaCadenaLarga;

?>