<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 22</h3>
    
    <h1>Lista de Estudiantes</h1>
    <ul>
        <?php
        for ($i = 0; $i < count($estudiantes); $i++) {
            $id = $i + 1;
            $nombre = $estudiantes[$i];
            echo "<li id=\"$id\">$nombre</li>";
        }
        ?>
    </ul>
</body>
</html>
