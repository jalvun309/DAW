<?php

//De esta manera podemos rellenar y crear un array de las dimensiones que necesitemos

foreach (range(0, 12) as $number) {
    if($number == 0) {
        echo $number;
    }else{
        echo ",".$number;
    }
}

echo "\n";


//Tambien sirve con letras

foreach (range('a', 'i') as $letter) {
    echo $letter;
}

echo "\n";

// Incluso letras en orden inverso

foreach (range('c', 'a') as $letter) {
    echo $letter;
}
echo "\n";

//Aqui podemos ver que podemos asignarles variables propias a las posiciones en el array, pero las cogera en orden

$info = array('coffee', 'brown', 'caffeine');

list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

//Aqui te muestro un ejemplo que podria utilizarse, evidentemente no tengo la base de datos pero se necesitaria para tener el ejemplo al completo
/*$result = $pdo->query("SELECT id, name FROM employees");
while (list($id, $name) = $result->fetch(PDO::FETCH_NUM)) {
    echo "id: $id, name: $name\n";
}*/

$array = array('paso uno', 'paso 2', 'paso 3', 'paso 4');

// Por defecto el puntero se encuentra en la primera posicion
echo current($array) . "\n"; // "step one"

// Salta 2 pasos
next($array);
next($array);
echo current($array) . "\n"; // "Aqui se encuentra en la tercera posicion"

// resetear el puntero y volver al principio
reset($array);
echo current($array) . "\n"; // "Paso uno"

