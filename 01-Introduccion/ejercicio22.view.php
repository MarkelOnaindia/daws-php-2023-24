<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 22</h3>
    
    <?php
    $posicion1 = encontrarPosicion("Marruecos", $paises);
    $posicion2 = encontrarPosicion("Dinamarca", $paises);

    echo "Posición de Marruecos: $posicion1<br>";
    echo "Posición de Dinamarca: $posicion2<br>";
    ?>
</body>
</html>
