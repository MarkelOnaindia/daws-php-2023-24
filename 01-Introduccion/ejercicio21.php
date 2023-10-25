<?php
function sumarNumerosPares($numero) {
    $suma = 0;
    for ($i = 0; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            $suma += $i;
            if ($suma > 100) {
                return $suma - $i; 
            }
        }
    }
    return $suma;
}

$numero = $_GET['numero'];

$sumaTotal = sumarNumerosPares($numero);

require 'ejercicio21.view.php';
