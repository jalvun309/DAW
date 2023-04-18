<?php
//Crear Ficheros

$fp=fopen("visitas.txt",'w') or die("Fallo en la creación del archivo");

$textoParaEscribir="Linea 1\nLinea2\nLinea3\n";
fwrite($fp,$textoParaEscribir) or die("Fallo en la escritura del archivo");
fclose($fp);

//Copiar Archivo

$ficheroInic='otrofichero.txt';
$ficheroFin='otrofichero3.txt';

if(!copy($ficheroInic,$ficheroFin)){
    echo "Error al copiar";
}else{
    echo "Archivo copiado correctamente en .../$ficheroFin";
}

//Renombrar Archivo

$ficheroInic='otrofichero.txt';
$ficheroFin='otrofichero3.txt';

if(!rename($ficheroInic,$ficheroFin)){
    echo "Error al renombrar $ficheroInic";
}else{
    echo "Archivo ".$ficheroInic." correctamente renombrado a ".$ficheroFin;
}

//Eliminar el archivo

$ficheroMuerto="Eliminar.txt";

if(!unlink($ficheroMuerto)){
    echo "Error al eliminar ".$ficheroMuerto;
}else{
    echo "Archivo ".$ficheroMuerto." ha sido eliminado con éxito";
}