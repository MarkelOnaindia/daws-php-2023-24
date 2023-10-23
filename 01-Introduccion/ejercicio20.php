<?php
function sumarNumerosPares($numero) {
    $suma = 0;
    for ($i = 0; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            $suma += $i;
        }
    }
    return $suma;
}

$numero = $_GET['numero'];

$sumaTotal = sumarNumerosPares($numero);

require 'ejercicio20.view.php';
