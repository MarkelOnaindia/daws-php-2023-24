<?php
function realizarOperacion($numero1, $numero2) {
    if ($numero1 != $numero2) {
        return $numero1 + $numero2;
    } else {
        return $numero1 * $numero2;
    }
}

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

$resultado = realizarOperacion($numero1, $numero2);

require 'ejercicio16.view.php';

