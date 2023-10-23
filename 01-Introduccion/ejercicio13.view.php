<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio13</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 13</h3>

    <?php
    echo "Número de elementos en el array de animales: $numAnimales<br>";
    echo "Número de elementos en el array de colores: $numColores<br>";

    echo "Elementos en el array de animales después de añadir un elemento al final: " . implode(", ", $animales) . "<br>";
    echo "Elementos en el array de colores después de añadir un elemento al principio: " . implode(", ", $colores) . "<br>";

    echo "Elementos en el tercer array: " . implode(", ", $tercerArray);
    ?>
</body>
</html>
