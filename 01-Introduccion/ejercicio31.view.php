<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 31</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 31</h3>

    <h2>Números Aleatorios</h2>
    <ul>
        <?php
        foreach ($randomNumbers as $numero) {
            echo "<li>$numero</li>";
        }
        ?>
    </ul>

    <h2>Valor Más Alto: <?php echo $valorMasAlto; ?></h2>
    <h2>Valor Más Bajo: <?php echo $valorMasBajo; ?></h2>
</body>
</html>
