<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio15</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 15</h3>

    <?php
    $nombreUsuario = $_GET['nombre'];
    $dato = $_GET['dato'];
    $resultado = getDatos($diccionario, $nombreUsuario, $dato);

    echo "El dato de $dato para el usuario $nombreUsuario es: $resultado";
?>
</body>
</html>
