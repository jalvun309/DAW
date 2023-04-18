<?php

//Apertura de fichero con w+
//w+ == Apertura para lectura y escritura. Puntero al incicio del archivo y lo sobreescribe. Si no existe lo intenta arreglar.

$fp=fopen("visitas.txt",'w+') or die("Fallo en la creación del archivo");

//Definimos la variable del texto y lo escribimos dentro del archivo
$textoParaEscribir="Hola";
fwrite($fp,$textoParaEscribir) or die("Fallo en la escritura del archivo");

//Cerramos el archivo
fclose($fp);

//Le indicamos la ruta del archivo y guardamos el contenido del mismo dentro de la variable file

$file = file_get_contents('../Archivos/visitas.txt', FILE_USE_INCLUDE_PATH);