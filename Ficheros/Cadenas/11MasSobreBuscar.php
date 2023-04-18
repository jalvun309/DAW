<?php

$email = "jotasuarez@elitecoachingempresarial.com";

$dominio = strstr($email, "@");
echo $dominio; // Muestra @elitecoachingempresarial.com
echo "<br/>";
echo "<br/>";
$usuario= strstr($email, "@", true);
echo $usuario; //Muestra: jotasuarez


