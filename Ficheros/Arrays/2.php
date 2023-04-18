<?php

/**
 * Compara dos arrays y devuelve los valores del primer array que no están en el segundo
 *
 * @param array $array1 El primer array a comparar
 * @param array $array2 El segundo array a comparar
 * @return array El array resultante
 */
function compararArrays($array1, $array2) {
    return array_diff($array1, $array2);
}

/**
 * Compara dos arrays tomando en cuenta las claves y los valores y devuelve los valores del primer array que no están en el segundo
 *
 * @param array $array1 El primer array a comparar
 * @param array $array2 El segundo array a comparar
 * @return array El array resultante
 */
function compararArraysAsociativos($array1, $array2) {
    return array_diff_assoc($array1, $array2);
}

/**
 * Compara dos arrays tomando en cuenta las claves y devuelve las claves del primer array que no están en el segundo
 *
 * @param array $array1 El primer array a comparar
 * @param array $array2 El segundo array a comparar
 * @return array El array resultante
 */
function compararClavesArrays($array1, $array2) {
    return array_diff_key($array1, $array2);
}
