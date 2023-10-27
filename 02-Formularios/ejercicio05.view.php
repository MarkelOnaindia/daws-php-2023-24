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
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    max-width: 600px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.product {
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.product img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-bottom: 10px;
}

.product input[type="number"] {
    width: 60px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.product button {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 3px;
    margin-top: 10px;
}

.product button:hover {
    background-color: #45a049;
}

.total {
    grid-column: span 2;
    text-align: center;
    margin-top: 20px;
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
                        <p><?php echo $producto["descripcion"]; ?></p>
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
