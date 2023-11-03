<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Tienda Online</h1>

        <h2>Listado de Productos</h2>
        <ul class="productos">
            <?php foreach ($productos as $producto) : ?>
                <?php $esFavorito = in_array($producto["id"], $_SESSION["productos_favoritos"] ?? []); ?>
                <li class="producto <?php if ($esFavorito) echo "favorito"; ?>">
                    <h3><?php echo $producto["nombre"]; ?></h3>
                    <p><?php echo $producto["precio"]; ?> €</p>
                    <div class="producto-buttons">
                        <form method="post" action="ejercicio10.php">
                            <input type="hidden" name="producto_id" value="<?php echo $producto["id"]; ?>">
                            <button type="submit" name="agregar">Agregar a la Cesta</button>
                        </form>
                        <form method="post" action="ejercicio10.php">
                            <input type="hidden" name="favorito_id" value="<?php echo $producto["id"]; ?>">
                            <button type="submit" name="guardar_favorito">Guardar como favorito</button>
                        </form>
                        <a href="ejercicio10detalles.php?id=<?php echo $producto["id"]; ?>">Ver Detalles</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="cesta">
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
                <form method="post" action="ejercicio10.php">
                    <button type="submit" name="comprar">Realizar Compra</button>
                </form>
            <?php endif; ?>
        </div>

        <div class="idioma-form">
            <h2>Selección de Idioma</h2>
            <form method="post" action="ejercicio10.php">
                <label for="idioma">Selecciona tu idioma:</label>
                <select id="idioma" name="idioma">
                    <option value="es" <?php if (isset($_COOKIE["idioma"]) && $_COOKIE["idioma"] == "es") echo "selected"; ?>>Español</option>
                    <option value="eu" <?php if (isset($_COOKIE["idioma"]) && $_COOKIE["idioma"] == "eu") echo "selected"; ?>>Euskera</option>
                </select>
                <button type="submit">Cambiar</button>
            </form>
        </div>

        <?php if (isset($_COOKIE["idioma"])) : ?>
            <?php if ($_COOKIE["idioma"] == "es") : ?>
                <h2>Bienvenido</h2>
            <?php elseif ($_COOKIE["idioma"] == "eu") : ?>
                <h2>Ongi etorri</h2>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>

</html>