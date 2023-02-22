<?php
// Nombre de la cookie
$nombre_cookie = "mi_cookie";
// Valor de la cookie
$valor_cookie = "Este es el valor de mi cookie";
// Tiempo de expiración de la cookie (en segundos)
$expiracion = time() + (86400 * 30); // 30 días a partir de ahora

// Crear la cookie
setcookie($nombre_cookie, $valor_cookie, $expiracion, "/");

// Mensaje de confirmación
echo "Cookie creada con éxito";

setcookie($nombre_cookie, "",time()-1000,"/");
echo "<br>";
// Mensaje de eliminación

echo "Cookie eliminada con exito";