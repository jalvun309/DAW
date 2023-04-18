<?php
$cadena11 = "Prueba";
$cadena21 = "Prueba";

if (strcmp($cadena11, $cadena21) == 0) {
    echo "Las dos cadenas son iguales";

} elseif (strcmp($cadena11, $cadena21) <0) {
    echo "La cadena 11 es menor que la cadena21";
} else {
    echo "La cadena 11 es mayor que la cadena 21";
}

echo "<br/>";
echo "<br/>";


//Comparación.. El operador == nos puede servir para evaluar si dos cadenas de caracteres
//son iguales dentro de una estructura de control

$cadena11 = "Prueba";
$cadena21 = "PRUEBA";

if (strcmp($cadena11, $cadena21) == 0) {
    echo "Las dos cadenas son iguales";
}elseif (strcmp($cadena11, $cadena21) < 0) {
    echo "La cadena 11 es menor que la cadena21";
}else{
    echo "La cadena11 es mayor que la cadena21";
}

echo "<br/>";
echo "<br/>";




$cadena11 = "Prueba";
$cadena21 = "Prueba";

if (strcmp($cadena11, $cadena21) == 0) {
    echo "Las dos cadenas son iguales";

} elseif (strcmp($cadena11, $cadena21) <0) {
    echo "La cadena 11 es menor que la cadena21";
} else {
    echo "La cadena 11 es mayor que la cadena 21";
}

echo "<br/>";
echo "<br/>";

$cadena11 = "Esta Es La Contraseña De Mi Wifi";
$cadena21 = "EstaEsLaContraseñaDeMiWifi";

if (strcmp($cadena11, $cadena21) == 0) {
    echo "Las dos cadenas son iguales";
}elseif (strcmp($cadena11, $cadena21) < 0) {
    echo "La cadena 11 es menor que la cadena21";
}else{
    echo "La cadena11 es mayor que la cadena21";
}

echo "<br/>";
echo "<br/>";

if (strcasecmp ($cadena11, $cadena21) == 0) {
    echo "Las dos cadenas son iguales";
} elseif (strcasecmp($cadena11, $cadena21) < 0) {
    echo "La cadena 11 es menor que la cadena 21";
}else {
    echo "La cadena11 es mayor que la cadena 21";
}
