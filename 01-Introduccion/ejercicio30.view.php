<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 30</h3>

    <h1>Notas Medias de Estudiantes</h1>
    <ul>
        <?php
        foreach ($estudiantes as $nombre => $nota) {
            echo "<li>La nota media de $nombre es $nota</li>";
        }
        ?>
    </ul>
</body>
</html>
