<?php

/**
 * Devuelve una porción de un array
 *
 * @param array $array El array del que se extrae la porción
 * @param int $inicio El índice de inicio de la porción
 * @param int $longitud La longitud de la porción (opcional, por defecto hasta el final)
 * @return array La porción del array
 */
function partirArray($array, $inicio, $longitud = null) {
    return array_slice($array, $inicio, $longitud);
}

/**
 * Remueve y reemplaza elementos de un array
 *
 * @param array $array El array original
 * @param int $inicio El índice de inicio de la porción a reemplazar
 * @param int $longitud La longitud de la porción a reemplazar (opcional, por defecto hasta el final)
 * @param array $nuevoArray El array que reemplazará la porción eliminada
 * @return array El array modificado
 */
function reemplazarArray($array, $inicio, $longitud = null, $nuevoArray) {
    array_splice($array, $inicio, $longitud, $nuevoArray);
    return $array;
}

/**
 * Divide un array en bloques más pequeños
 *
 * @param array $array El array a dividir
 * @param int $tamano El tamaño de cada bloque
 * @return array El array dividido en bloques
 */
function dividirArray($array, $tamano) {
    return array_chunk($array, $tamano);
}

/**
 * Extrae y elimina el primer elemento de un array
 *
 * @param array $array El array del que se extrae el primer elemento
 * @return mixed El primer elemento del array
 */
function extraerPrimerElemento($array) {
    return array_shift($array);
}

/**
 * Agrega uno o más elementos al inicio de un array
 *
 * @param array $array El array al que se agrega el elemento
 * @param mixed $elemento1 El primer elemento a agregar
 * @param mixed $elemento2 El segundo elemento a agregar (opcional)
 * @param mixed $elementoN El n-ésimo elemento a agregar (opcional)
 * @return array El array modificado
 */
function agregarElementosInicio($array, $elemento1, $elemento2 = null, $elementoN = null) {
    array_unshift($array, $elemento1);

    if ($elemento2 !== null) {
        array_unshift($array, $elemento2);

        if ($elementoN !== null) {
            for ($i = 3; $i <= func_num_args(); $i++) {
                array_unshift($array, func_get_arg($i - 1));
            }
        }
    }

    return $array;
}