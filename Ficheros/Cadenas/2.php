//<!DOCTYPE html>
//<html>
<h1> Pablo Amaya Dobla </h1>

<?php
//nowdocHeredoc.php

echo "ejemplo de uso de Nowdoc";
echo "<br/>";
echo "<br/>";

$objetivoLibroJota = <<< 'INTRODUCCION'
Tengo un objetivo con este -mi primer- libro: echo "<br/>"
que tome consciencia de que, como fortaleza personal echo "<br/>"
del caracter, el entusiasmo es la voluntad de echo "<br/>"
conseguir objetivos en situaciones dificiles. echo "<br/>"
Es energia interior clave para el desarrollo echo "<br/>"
del talento. Es energia clave para tu propio autoliderazgo, echo "<br/>"
asi como para liderar e inspirar a otras personas, grupos o equipos.
INTRODUCCION;

echo $objetivoLibroJota;
