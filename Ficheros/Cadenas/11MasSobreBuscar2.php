<?php

$email2 = "MINIOMBRE@elitecoachingempresarial.com";

$dominio = strstr($email, "@");
echo "A VER con ESTE eMAIL   " .$email2;
echo "<br/>";

if(stristr($email2, '@gmail.com')) {
    echo "Tu email es google";
}


