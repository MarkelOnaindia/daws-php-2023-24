<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 24</h3>
    <h1>Lista de Estudiantes</h1>
    <ul>
        <?php
        $indice = 0;
        while ($indice < count($estudiantes)) {
            echo "<li>{$estudiantes[$indice]}</li>";
            $indice++;
        }
        ?>
    </ul>
</body>
</html>
