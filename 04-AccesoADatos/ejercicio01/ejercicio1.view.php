<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Acceso a datos: Ejercicio 1</h1>

    <h1>Lista de Compras</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto['id']; ?></td>
                    <td><?php echo $producto['elemento']; ?></td>
                    <td><a href="ejercicio1.php?id=<?php echo $producto['id']; ?>">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Añadir nuevo producto:</h2>
    <form action="ejercicio1.php" method="post">
        <label for="producto">Nombre del producto:</label>
        <input type="text" id="producto" name="producto" required>
        <button type="submit">Añadir Producto</button>
    </form>
    <p><a href="ejercicio1.php?vaciarLista=1">Vaciar Lista</a></p>
</body>
</html>
