<?php

function calcularAreaCuadrado($lado1, $lado2) {
    if ($lado1 < 0 || $lado2 < 0) {
        throw new Exception("Los lados no pueden ser negativos");
    }

    return $lado1 * $lado2;
}

try {
    $area = calcularAreaCuadrado(5, 3);
    echo "Área del cuadrado: $area\n";

    $area = calcularAreaCuadrado(4, -2);
    echo "Este mensaje no se imprimirá debido a la excepción.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}