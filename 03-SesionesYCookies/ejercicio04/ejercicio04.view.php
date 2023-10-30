<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencia</title>
</head>

<body>
    <h1>Control de Asistencia</h1>
    <form method="post" action="ejercicio04.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Añadir Asistente</button>
    </form>

    <form method="post" action="ejercicio04.php">
        <input type="hidden" name="borrar_lista" value="true">
        <button type="submit">Borrar Lista</button>
    </form>

    <h2>Asistentes:</h2>
    <ul>
        <?php
        foreach ($asistentes as $asistente) {
            echo "<li>$asistente</li>";
        }
        ?>
    </ul>
</body>

</html>
