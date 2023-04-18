<?php

$directorio = ""; //Aquí debes poner tu htdoc
$carpeta_web = strrchr($directorio, "/");
echo $carpeta_web;
echo "<br/>";
echo "<br/>";

$misDatosPersonales = "11223344P JOTA SUAREZ RIVAS BARATE CADIZ ANDALUCIA";
$datosSinDni= strrchr ($misDatosPersonales, "P");
echo $datosSinDni; // Devuelve: P JOTA SUAREZ RIVAS BARBATE CADIZ ANDALUCIA