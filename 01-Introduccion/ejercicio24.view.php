<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 24</h3>
    <h1>Agenda de Contactos</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
        </tr> 
        <?php
        for ($i = 0; $i < count($agenda); $i++) {
            echo "<tr>";
                echo "<td>{$agenda[$i]['nombre']}</td>";
                echo "<td>{$agenda[$i]['apellidos']}</td>";
                echo "<td>{$agenda[$i]['telefono']}</td>";
                echo "<td>{$agenda[$i]['correo']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
