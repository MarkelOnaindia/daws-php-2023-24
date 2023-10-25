<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 28</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 28</h3>

    <h1>Lista de Marcas de Coches</h1>
    <ul>
        <?php
        foreach ($marcasCoches as $marca) {
            echo "<li>$marca</li>";
        }
        ?>
    </ul>
</body>
</html>
