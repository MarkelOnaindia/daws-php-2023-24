<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Números</title>
</head>
<body>
    <h1>Formularios</h1>
    <h3>Ejercicio 3</h3>
    <form method="post" action="ejercicio03.php">
        <label for="numero">Introduce un número entre 1 y 10:</label>
        <input type="number" name="numero" min="1" max="10">
        <input type="submit" value="Enviar">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>El número <?php echo $numeroUsuario; ?> aparece <?php echo $vecesAparece; ?> veces en el array.</p>
        <p>Array de números aleatorios: <?php echo implode(", ", $numerosAleatorios); ?></p>
    <?php endif; ?>
</body>
</html>
