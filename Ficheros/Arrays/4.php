<?php

/**
 * Ordena un array multidimensional utilizando una o más columnas
 *
 * @param array $array El array a ordenar
 * @param mixed $columna1 El índice de la primera columna a ordenar
 * @param mixed $columna2 El índice de la segunda columna a ordenar (opcional)
 * @param mixed $columnaN El índice de la n-ésima columna a ordenar (opcional)
 * @return array El array ordenado
 */
function ordenarArray($array, $columna1, $columna2 = null, $columnaN = null) {
    $args = array();

    foreach ($array as $clave => $fila) {
        $args[$clave] = $fila[$columna1];

        if ($columna2 !== null) {
            $args[$clave] = array_merge($args[$clave], array($fila[$columna2]));

            if ($columnaN !== null) {
                for ($i = 3; $i <= func_num_args(); $i++) {
                    $args[$clave] = array_merge($args[$clave], array($fila[func_get_arg($i - 1)]));
                }
            }
        }
    }

    array_multisort($args, SORT_ASC, $array);

    return $array;
}

/**
 * Crea un array con un valor dado en todas sus posiciones
 *
 * @param int $tamano La longitud del array
 * @param mixed $valor El valor a asignar a todas las posiciones
 * @return array El array resultante
 */
function llenarArray($tamano, $valor) {
    return array_fill(0, $tamano, $valor);
}

/**
 * Crea un array con un rango de valores dados
 *
 * @param int $inicio El valor inicial del rango
 * @param int $fin El valor final del rango
 * @param int $incremento El valor a incrementar en cada paso (opcional, por defecto 1)
 * @return array El array resultante
 */
function crearRango($inicio, $fin, $incremento = 1) {
    return range($inicio, $fin, $incremento);
}


$array = array(
    array('nombre' => 'Juan', 'apellido' => 'Pérez', 'edad' => 25),
    array('nombre' => 'Ana', 'apellido' => 'García', 'edad' => 30),
    array('nombre' => 'Pedro', 'apellido' => 'Martínez', 'edad' => 20)
);

// Utilizando la función ordenarArray
$resultado1 = ordenarArray($array, 'apellido', 'nombre', 'edad');
var_dump($resultado1);
/* 
Imprime el array ordenado por apellido, nombre y edad:
array(
    array('nombre' => 'Ana',
