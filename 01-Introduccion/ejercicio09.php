<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio09</title>
</head>
<body>
    <?php
    function concatenarCadenas($cadena1, $cadena2) {
        $resultado = $cadena1 . $cadena2;
        return $resultado;
    }

    $texto1 = "Hola, ";
    $texto2 = "mundo!";
    
    $concatenacion = concatenarCadenas($texto1, $texto2);
    
    echo "<h1>Introducción</h1>";
    echo "<h3>Ejercicio 9</h3>";
    echo "<p>Concatenación de cadenas: " . $concatenacion . "</p>";
    ?>
</body>
</html>
