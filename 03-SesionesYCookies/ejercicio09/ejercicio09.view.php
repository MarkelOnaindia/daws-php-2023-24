<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <style>
        .productos {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
    </style>
</head>

<body>
    <h1>Tienda Online</h1>
    <h2>Listado de Productos</h2>
    <ul class="productos">
        <?php foreach ($productos as $producto) : ?>
            <li>
                <?php echo $producto["nombre"]; ?> - <?php echo $producto["precio"]; ?> €
                <form method="post" action="ejercicio09.php">
                    <input type="hidden" name="producto_id" value="<?php echo $producto["id"]; ?>">
                    <button type="submit" name="agregar">Agregar a la Cesta</button>
                </form>
                <a href="ejercicio09detalles.php?id=<?php echo $producto["id"]; ?>">Ver Detalles</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Cesta de la Compra</h2>
    <?php if (empty($_SESSION["cesta"])) : ?>
        <p>No hay productos en la cesta. Comience a comprar.</p>
    <?php else : ?>
        <ul>
            <?php
            $total = 0;
            foreach ($_SESSION["cesta"] as $producto) : ?>
                <li><?php echo $producto["nombre"]; ?> - <?php echo $producto["precio"]; ?> €</li>
                <?php $total += $producto["precio"]; ?>
            <?php endforeach; ?>
        </ul>
        <p>Total: <?php echo $total; ?> €</p>
        <form method="post" action="ejercicio09.php">
            <button type="submit" name="comprar">Realizar Compra</button>
        </form>
    <?php endif; ?>

    <h2>Selección de Idioma</h2>
    <form method="post" action="ejercicio09.php">
        <label for="idioma">Selecciona tu idioma:</label>
        <select id="idioma" name="idioma">
            <option value="es" <?php if (isset($_COOKIE["idioma"]) && $_COOKIE["idioma"] == "es") echo "selected"; ?>>Español</option>
            <option value="eu" <?php if (isset($_COOKIE["idioma"]) && $_COOKIE["idioma"] == "eu") echo "selected"; ?>>Euskera</option>
        </select>
        <button type="submit">Cambiar</button>
    </form>

    <?php if (isset($_COOKIE["idioma"])) : ?>
        <?php if ($_COOKIE["idioma"] == "es") : ?>
            <h2>Bienvenido</h2>
        <?php elseif ($_COOKIE["idioma"] == "eu") : ?>
            <h2>Ongi etorri</h2>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>