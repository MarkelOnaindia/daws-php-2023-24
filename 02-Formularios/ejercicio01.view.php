<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
    <style>
        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 60%;
            grid-gap: 1em;
        }
    </style>
</head>
<body>
    <h1>Formularios</h1>
    <h3>Ejercicio 1</h3>
    <form action="#" method="get">
        <label for="temperatura">Introduce la temperatura</label>
        <input type="text" id="temperatura" name="temperatura" required>
        <label>Indica la unidad de temperatura introducida</label>
        <select name="unidad" required>
            <option value="Celsius">Celsius</option>
            <option value="Farenheit">Farenheit</option>
        </select>
        <input type="submit">
        <input type="reset">
    </form>

    <?php
    if (isset($resultado)) {
        echo "<h2>Resultado</h2>";
        echo "<p>$resultado</p>";
    }
    ?>
</body>
</html>
