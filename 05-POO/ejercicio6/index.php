<?php

function division($dividendo, $divisor) {
    if ($divisor === 0) {
        throw new Exception("No se puede dividir por cero");
    }

    return $dividendo / $divisor;
}

try {
    $resultado = division(10, 2);
    echo "Resultado de la división: $resultado\n";

    $resultado = division(5, 0);
    echo "Este mensaje no se imprimirá debido a la excepción.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
