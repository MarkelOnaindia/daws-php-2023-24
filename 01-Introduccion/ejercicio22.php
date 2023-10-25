<?php
$paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

function encontrarPosicion($pais, $array) {
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $pais) {
            return $i;
        }
    }
    return -1;
}

require 'ejercicio22.view.php';