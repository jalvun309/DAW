<?php
/*
$miArchivo='Archivo.txt';

if(file_exists($miArchivo)){
    echo "existe el ficehro";
    echo $miArchivo;
    $fp=fopen($miArchivo,"r");
    fclose($fp);
}else{
    echo "No existe";
}
// Con esto lo que conseguimos es tener un contador, que se puede usar por ejemplo
// para calcular el nivel de visitas en nuestra pagina web.

$fo=fopen("contador.txt","r+");
$counter = fgets($fo, 7);
echo $counter;
$counter++;
rewind($fo);
fputs($fo,$counter);
fclose($fo);

$file="Archivo.txt";
$fpp=fopen($file,"r");
$contenido =fread($fpp,filesize($file));

$texto="Hola que tal";
fputs($file,$texto,4);

/*
 * Manual para fopen:
 * r= Apertura para lectura. Puntero al principio del archivo
 * r+= Apertura para lectura y escritura. Puntero al principio del archivo
 * w= Apertura para escritura. Puntero al principio del archivo y lo sobreescribe. Si no existe lo intenta crear.
 * w+= Apertura para lectura y escritura. Puntero al incicio del archivo y lo sobreescribe. Si no existe lo intenta arreglar.
 * a= Apertura para escritura. Puntero al final del archivo. Si no existe se intenta crear.
 * a+= Apertura para lectura y escritura. Puntero al final del archivo. Si no existe se intenta crear
 *
 *
 *
 */
/*
$file="creofichero.txt";
$texto="Haciendo prueba de escritura ++++";
$fp=fopen($file,"r+");
fwrite($fp,$texto);

echo fread($fp,filesize($file));
//echo fgets($fp,filesize($file));
//readfile($file);
fclose($fp);*/

$miArchivo='Archivo.txt';

if(file_exists($miArchivo)){
    echo "existe el ficehro";
    echo $miArchivo;
    $fp=fopen($miArchivo,"r");
    fclose($fp);
}else{
    echo "No existe";
}

if(!file_exists($miArchivo)){
    echo "No existe";
}else{
    echo "existe el ficehro";
    echo $miArchivo;
    $fp=fopen($miArchivo,"r");
    fclose($fp);
}

//fgets Obtiene una linea (Hasta el primer salto de linea) desde el puntero.
//rewind Rebonina a posicion de un puntero en un archivo
//file_get_contens("ficherotexto.txt") Con esto podemos cargar el contenido de un
// archivo, asi que nos sirve para representar nuestras paginas web, ya que tambien podemos pornerle URL.
