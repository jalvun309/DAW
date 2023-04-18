<?php

//Esta vez lo abrimos con r+ para tener los permisos que se han pedido
//r+ == r+= Apertura para lectura y escritura. Puntero al principio del archivo

$fp=fopen("../Archivos/visitas.txt",'r+') or die("Fallo en la creación del archivo");

//Definimos la variable del texto y lo escribimos dentro del archivo
$textoParaEscribir="Hola";
fwrite($fp,$textoParaEscribir) or die("Fallo en la escritura del archivo");

//Cerramos el archivo
fclose($fp);


//Lectura de la frase
$file="../Archivos/Archivo.txt";
$fpp=fopen($file,"r");
$contenido =fread($fpp,filesize($file));

echo $contenido;