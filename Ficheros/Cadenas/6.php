<?php

$cadena = "Esta cadena tiene muchas letras";

echo "<br/>";

print "La palabra 'cadena' está contenida: " . (str_contains($cadena, 'cadena') ? 'verdadero' : 'falso') . "<br/>";
        
echo "<br/>";
print "La palabra 'tiene' está contenida: " . (str_contains($cadena, 'PHP') ? 'verdadero': 'falso');
    echo "<br/>";

print "La cadena empieza por 'Esta' : " . (str_starts_with($cadena, 'Esta')? 'verdadero' : 'falso') . "<br/>";

print "La cadena no empieza por 'Aquella' : " . (str_starts_with($cadena, 'Aquella')? 'verdadero' : 'falso') . "<br/>";

print "La cadena termina en 'Letras' : " . (str_ends_with($cadena, 'vocales')? 'verdadero' : 'falso') . "<br/>";


