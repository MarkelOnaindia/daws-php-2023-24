<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 26</h3>

    <h1>Lista de Marcas de Coches</h1>
    <ul>
        <?php
        $contador = 0;
        do {
            echo "<li>{$marcasCoches[$contador]}</li>";
            $contador++;
        } while ($contador < count($marcasCoches));
        ?>
    </ul>
</body>
</html>
