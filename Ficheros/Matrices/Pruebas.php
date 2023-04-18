<?php

$matriz[0][0] = "01";
$matriz[0][1] = "02";
$matriz[0][2] = "03";

$matriz[1][0] = "04";
$matriz[1][1] = "05";
$matriz[1][2] = "06";

$matriz[2][0] = "07";
$matriz[2][1] = "08";
$matriz[2][2] = "09";
/*
$matriz[3][0] = "10";
$matriz[3][1] = "11";
$matriz[3][2] = "12";
*/

$salto=0;
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        if($salto==2){
            echo $matriz[$i][$j]."\n";
            $salto=0;
        }else{
            echo $matriz[$i][$j]."\t";
            $salto++;
        }

    }
}


function MatrizCuadrada($matriz){

    if(count($matriz)==count($matriz[0])){
        /*echo "La matriz es cuadrada"."\n";
        echo "Valor de N= ".count($matriz);
        echo "Valor de M= ".count($matriz[0]);*/
        return false;
    }else{
        /*echo "No es una matriz cuadrada debido a que sus lados son distintos"."\n";
        echo "Valor de N= ".count($matriz);
        echo "Valor de M= ".count($matriz[0]);*/
        return true;
    }
}

function MatrizNula($matriz){
    $resul=0;
    for($i=0;$i<count($matriz);$i++){
        for($j=0;$j<count($matriz);$j++){
            $resul=$resul+$matriz[$i][$j];
        }
    }

    if($resul==0){
        echo "La matriz es nula"."\n";
    }else{
        echo "La matriz no es nula"."\n";
    }
}

function MatrizDiagonal($matriz){
    if(MatrizCuadrada($matriz)){
        for($i=0;$i<count($matriz);$i++){
            if($matriz[$i][$i]==1){
                ;
            }
        }
        return 1;
    }else{
        return 2;
    }
}

function esMatrizDeUnidad($matriz){
    $filas = count($matriz);
    $columnas = count($matriz[0]);

    // Comprobar si la matriz es cuadrada
    if($filas != $columnas){
        return false;
    }

    // Comprobar si todos los elementos de la diagonal principal son 1 y los demás 0
    for($i = 0; $i < $filas; $i++){
        for($j = 0; $j < $columnas; $j++){
            if($i == $j && $matriz[$i][$j] != 1){
                return false;
            } elseif($i != $j && $matriz[$i][$j] != 0){
                return false;
            }
        }
    }

    // Si todos los elementos de la diagonal principal son 1 y los demás 0, es una matriz de unidad
    return true;
}

$matrizsuperior = array(
    array(1, 2, 3),
    array(0, 4, 5),
    array(0, 0, 6)
);

$matrizinferior = array(
    array(1, 0, 0),
    array(2, 3, 0),
    array(4, 5, 6)
);


function esMatrizTriangular($matriz){
    $filas = count($matriz);
    $columnas = count($matriz[0]);

    // Comprobamos si es una matriz triangular superior
    for($i = 1; $i < $filas; $i++){
        for($j = 0; $j < $i; $j++){
            if($matriz[$i][$j] != 0){
                return false;
            }
        }
    }

    // Comprobamos si es una matriz triangular inferior
    for($i = 0; $i < $filas; $i++){
        for($j = $i+1; $j < $columnas; $j++){
            if($matriz[$i][$j] != 0){
                return false;
            }
        }
    }

    // Si no es triangular superior ni inferior, es una matriz general
    return true;
}

