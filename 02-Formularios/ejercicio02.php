<?php
function calcularOperacion($num1, $num2, $operacion) {
    switch ($operacion) {
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicacion':
            return $num1 * $num2;
        case 'division':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: No se puede dividir entre cero.";
            }
        default:
            return "Operación no válida.";
    }
}

$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    $resultado = calcularOperacion($num1, $num2, $operacion);
}

require 'ejercicio02.view.php';
