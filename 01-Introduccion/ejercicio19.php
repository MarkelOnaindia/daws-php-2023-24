<?php
function sumarNumeros($numero) {
    $suma = 0;
    for ($i = 0; $i <= $numero; $i++) {
        $suma += $i;
    }
    return $suma;
}

$numero = $_GET['numero'];

$sumaTotal = sumarNumeros($numero);

require 'ejercicio19.view.php';
