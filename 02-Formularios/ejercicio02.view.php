<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
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
    <h1>Calculadora</h1>
    <form action="#" method="post">
        <label for="num1">Número 1</label>
        <input type="number" id="num1" name="num1" required>
        <label for="num2">Número 2</label>
        <input type="number" id="num2" name="num2" required>
        <label for="operacion">Operación</label>
        <select id="operacion" name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <input type="submit">
        <input type="reset">
    </form>

    <?php
    if ($resultado !== '') {
        echo "<h2>Resultado</h2>";
        echo "<p>$resultado</p>";
    }
    ?>
</body>
</html>
