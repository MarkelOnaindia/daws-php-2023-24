<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            width: 60px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            margin-top: 20px;
            text-align: center;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #4caf50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Catálogo de Productos</h1>
        <form method="post" action="ejercicio05.php">
            <?php foreach ($productos as $producto): ?>
                <div>
                    <label for="producto_<?php echo $producto['id']; ?>">
                        <?php echo $producto["nombre"]; ?> - <?php echo $producto["precio"]; ?>€
                    </label>
                    <input type="number" name="producto_<?php echo $producto['id']; ?>" min="0">
                </div>
            <?php endforeach; ?>
            <input type="submit" value="Enviar">
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <h2>Total de la Compra: <?php echo $totalCompra; ?>€</h2>
            <a href="ejercicio05.php">Volver al Catálogo</a>
        <?php endif; ?>
    </div>
</body>
</html>
