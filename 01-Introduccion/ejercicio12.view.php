<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio12</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 12</h3>

    <?php

    $posicion = $_GET['posicion'];
    $valor = $_GET['valor'];
    
    echo "Valor en la posición $posicion: " . getValor($ciudades, $posicion) . "<br>";

    $ciudadesModificadas = setValor($ciudades, 1, $valor);
    echo "Array después de cambiar el valor en la posición 1: " . implode(", ", $ciudadesModificadas);
    ?>
</body>
</html>
