<?php
function getValor($array, $posicion) {
    if (array_key_exists($posicion, $array)) {
        return $array[$posicion];
    } else {
        return "La posición especificada no existe en el array.";
    }
}

function setValor($array, $posicion, $valor) {
    if (array_key_exists($posicion, $array)) {
        $array[$posicion] = $valor;
        return $array;
    } else {
        return "La posición especificada no existe en el array.";
    }
}

$ciudades = ['Paris', 'Berlin', 'Amsterdam', 'Praga'];

require 'ejercicio12.view.php';