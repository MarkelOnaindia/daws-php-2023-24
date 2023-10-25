<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 32</title>
    <style>
        .rojo {
            color: red;
        }
        table {
            width: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Introducción</h1>
    <h3>Ejercicio 32</h3>

    <h2>Notas de Estudiantes</h2>
    <table>
        <tr>
            <th>Estudiante</th>
            <th>Examen 1</th>
            <th>Examen 2</th>
        </tr>
        <?php
        foreach ($estudiantes as $nombre => $notas) {
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td" . ($notas['examen1'] < 5 ? ' class="rojo"' : '') . ">{$notas['examen1']}</td>";
            echo "<td" . ($notas['examen2'] < 5 ? ' class="rojo"' : '') . ">{$notas['examen2']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
