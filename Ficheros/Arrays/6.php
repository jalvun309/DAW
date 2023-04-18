<?php
/**
 * Extrae y elimina el último elemento de un array
 *
 * @param array $array El array del que se extrae el último elemento
 * @return mixed El último elemento del array
 */
function extraerUltimoElemento($array) {
    return array_pop($array);
}

/**
 * Agrega uno o más elementos al final de un array
 *
 * @param array $array El array al que se agrega el elemento
 * @param mixed $elemento1 El primer elemento a agregar
 * @param mixed $elemento2 El segundo elemento a agregar (opcional)
 * @param mixed $elementoN El n-ésimo elemento a agregar (opcional)
 * @return array El array modificado
 */
function agregarElementosFinal($array, $elemento1, $elemento2 = null, $elementoN = null) {
    array_push($array, $elemento1);

    if ($elemento2 !== null) {
        array_push($array, $elemento2);

        if ($elementoN !== null) {
            for ($i = 3; $i <= func_num_args(); $i++) {
                array_push($array, func_get_arg($i - 1));
            }
        }
    }

    return $array;
}

/**
 * Intercambia las llaves y valores de un array
 *
 * @param array $array El array a invertir
 * @return array El array invertido
 */
function invertirArray($array) {
    return array_flip($array);
}
