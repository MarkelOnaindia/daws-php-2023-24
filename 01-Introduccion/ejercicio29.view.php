<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 29</h3>

    <h1>Agenda de Contactos</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
        </tr>
        <?php
        foreach ($agenda as $contacto) {
            echo "<tr>";
                echo "<td>{$contacto['nombre']}</td>";
                echo "<td>{$contacto['apellidos']}</td>";
                echo "<td>{$contacto['telefono']}</td>";
                echo "<td>{$contacto['correo']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

