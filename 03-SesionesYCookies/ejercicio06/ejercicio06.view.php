<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        .mensaje-error {
            color: red;
        }

        .mensaje-exito {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Iniciar Sesión</h1>
    <?php if (isset($mensajeError)) : ?>
        <p class="mensaje-error"><?php echo $mensajeError; ?></p>
    <?php elseif (isset($_SESSION["usuario"])) : ?>
        <p class="mensaje-exito">¡Bienvenido, <?php echo $_SESSION["usuario"]; ?>!</p>
    <?php endif; ?>
    <form method="post" action="ejercicio06.php">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>

</html>
