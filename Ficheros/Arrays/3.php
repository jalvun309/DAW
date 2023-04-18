<?php
/**
 * Une dos arrays en uno solo
 *
 * @param array $array1 El primer array a unir
 * @param array $array2 El segundo array a unir
 * @return array El array resultante
 */
function unirArrays($array1, $array2) {
    return array_merge($array1, $array2);
}

/**
 * Une dos arrays de manera recursiva en uno solo
 *
 * @param array $array1 El primer array a unir
 * @param array $array2 El segundo array a unir
 * @return array El array resultante
 */
function unirArraysRecursivo($array1, $array2) {
    return array_merge_recursive($array1, $array2);
}

/**
 * Crea un array utilizando las claves de un array y los valores de otro array
 *
 * @param array $array1 El array de claves
 * @param array $array2 El array de valores
 * @return array El array resultante
 */
function combinarArrays($array1, $array2) {
    return array_combine($array1, $array2);
}
