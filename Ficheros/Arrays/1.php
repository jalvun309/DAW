<?php
$fruits = array("d" => "limon", "a" => "naranja", "b" => "platano", "c" => "manzana");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2\n";
}

echo "Antes ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruta');
echo "... y despues:\n";


array_walk($fruits, 'test_print');

//Prueba con array_key_exists
echo "\n"."Pruebas con array_key_exists:"."\n";
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "El elemento si se encuentra en el array";
}else{
    echo "El elemento no se encuentra en el array";
}
echo "\n";
//Prueba con in_array
echo "\n"."Pruebas con in_arrays:"."\n";

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Existe Irix";
}
if (in_array("mac", $os)) {
    echo "Existe mac";
}
echo "\n";
//Pruebas con array_keys
echo "\n"."Pruebas con array_keys:"."\n";

$array = array(0 => 100, "color" => "rojo");
print_r(array_keys($array));

$array = array("azul", "rojo", "verde", "azul", "azul");
print_r(array_keys($array, "azul"));

$array = array("color" => array("azul", "rojo", "verde"),
    "size"  => array("pequeño", "medio", "largo"));
print_r(array_keys($array));

//Prueba con array_values
echo "\n"."Pruebas con array_values:"."\n";

$array = array("tamaño" => "XL", "color" => "oro");
print_r(array_values($array));