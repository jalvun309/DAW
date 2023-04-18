<?php

$cadena = "áéíóú";

$numero_letras = strlen($cadena);
echo $cadena . "<br/>";
echo "El string de 5 letras con tilde tiene $numero_letras caracteres";

echo "<br/>";
echo "<br/>";echo "<br/>";

$cadenaTextoEspañol = "cantaré, cajón, además, camión, balcón, tapón, galán";

echo "Y ahora lo vemos mejor con este ejemplo";
echo "<br/>";

echo "<b> $cadenaTextoEspañol</b> tiene " . strlen($cadenaTextoEspañol) . " bytes y " . mb_strlen($cadenaTextoEspañol) . "caracteres<br/>";


