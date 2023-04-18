<?php

$cadena= "Esta cadena tiene muchas letras";
$cadena2= "Esta cadena tiene muchas letras";

$numeroLetras = strlen($cadena);
echo "<br/>";
echo "<b>Esta cadena tiene muchas letras</b>.....Es la cadena del ejemplo";
echo "<br/>";
echo "<br/>";

echo "y tiene    ".$numeroLetras."   letras";
echo "<br/>";
echo "<br/>";

echo "La primera ocurrencia de 'a' es " . strpos($cadena2, "a") . "<br/>";

echo "<br/>";
echo "La primera ocurrencia de 'd' es " . strpos($cadena, "tiene") . "<br/>";

echo "<br/>";

echo "La primera ocurrencia de 'a' es " . strpos($cadena2, "a") . "<br/>";
echo "<br/>";

echo "La primera ocurrencia empezando por atras de 'a' es " . strrpos($cadena2, "a") . "<br/>";