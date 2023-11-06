<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="ejercicio3.css">
</head>
<body>
    <div>
        <h1>Lista de empleados</h1>

        <form action="ejercicio3.php" method="get" class="busqueda">
            <input type="text" id="nombre" name="nombre" placeholder="Busqueda por nombre:">
            <button type="submit">Buscar</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleados as $empleado): ?>
                    <tr>
                        <td><?php echo $empleado['dni']; ?></td>
                        <td><?php echo $empleado['nombre']; ?></td>
                        <td><?php echo $empleado['apellidos']; ?></td>
                        <td><a href="detalles_empleado.php?id=<?php echo $empleado['dni']; ?>">Ver Detalles</a> | <a href="ejercicio3.php?id=<?php echo $empleado['dni']; ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>            
            </tbody>
        </table>
    </div>
    <div>
        <h1>Añadir empleado</h1>
        <form action="ejercicio3.php" method="post">
            <input type="text" id="dni" name="dni" placeholder="DNI" require>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" require>
            <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" require>
            <input type="text" id="edad" name="edad" placeholder="Edad" require>
            <select id="sexo" name="sexo" require>
                <option value="Mujer">Mujer</option>
                <option value="Hombre">Hombre</option>
                <option value="Otro">Otro</option>
            </select>
            <input type="date" id="fecha" name="fecha" require>
            <input type="text" id="curriculum" name="curriculum" placeholder="Curriculum" require>
            <input type="submit" id="enviar" name="enviar" value="Enviar" require>
        </form>
    </div>

    <div>Notificacion: <?php echo $mensaje; ?></div>

</body>
</html>