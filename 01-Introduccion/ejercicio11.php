<?php
function concatenarCadenas($cadena1, $cadena2 = " Amigos!") {
    $resultado = $cadena1 . $cadena2;
    return $resultado;
}

$texto1 = "Hola, ";
$concatenacion = concatenarCadenas($texto1);

require 'ejercicio11.view.php';
