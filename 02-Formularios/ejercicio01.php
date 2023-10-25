<?php
function convertirTemperatura($temperatura, $unidad) {
    if ($unidad === 'Celsius') {
        $resultado = ($temperatura * 9/5) + 32;
        return "La temperatura en Fahrenheit es: $resultado °F";
    } elseif ($unidad === 'Farenheit') {
        $resultado = ($temperatura - 32) * 5/9;
        return "La temperatura en Celsius es: $resultado °C";
    } else {
        return "Unidad de temperatura no válida.";
    }
}

if (isset($_GET['temperatura']) && isset($_GET['unidad'])) {
    $temperatura = $_GET['temperatura'];
    $unidad = $_GET['unidad'];

    $resultado = convertirTemperatura($temperatura, $unidad);
}

require 'ejercicio01.view.php';