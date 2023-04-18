<?php

// Con esto lo que conseguimos es tener un contador, que se puede usar por ejemplo
// para calcular el nivel de visitas en nuestra pagina web.

$fo=fopen("../Archivos/contador.txt","r+");
$counter = fgets($fo, 7);
echo $counter;
$counter++;
rewind($fo);
fputs($fo,$counter);
fclose($fo);