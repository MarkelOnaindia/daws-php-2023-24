<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio10</title>
</head>
<body>
    <?php
    function concatenarCadenas($cadena1, $cadena2 = " Mundo!") {
        $resultado = $cadena1 . $cadena2;
        return $resultado;
    }

    $texto1 = "Hola, ";
    
    // Llamando a la función sin proporcionar el segundo argumento
    $concatenacion = concatenarCadenas($texto1);
    
    echo "<h1>Introducción</h1>";
    echo "<h3>Ejercicio 10</h3>";
    echo "<p>Concatenación de cadenas: " . $concatenacion . "</p>";
    ?>
</body>
</html>
