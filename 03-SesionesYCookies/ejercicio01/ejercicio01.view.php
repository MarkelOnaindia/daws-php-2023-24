<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
</head>

<body>
    <h1>Formulario de Usuario</h1>
    <form method="post" action="ejercicio01.php">
        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <button type="submit">Guardar</button>
    </form>

    <p>
        <?php
        if (isset($_COOKIE["usuario"])) {
            echo "El ultimo usuario registrado es: ";
            echo $_COOKIE["usuario"];
        } else {
            echo "No hay usuario almacenado.";
        }
        ?>
    </p>
</body>

</html>
