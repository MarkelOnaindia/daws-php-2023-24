<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 27</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 27</h3>

    <h1>Grupos de Música</h1>
    <ul>
        <?php
        foreach ($gruposMusica as $grupo) {
            echo "<li>$grupo</li>";
        }
        ?>
    </ul>
</body>
</html>
