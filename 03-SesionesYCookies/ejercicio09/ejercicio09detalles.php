<?php
$productos = [
    ["id" => 1, "nombre" => "Smartphone Samsung Galaxy S21", "descripcion" => "Teléfono inteligente con pantalla AMOLED de 6.2 pulgadas, 5G, 128GB de almacenamiento.", "precio" => 799.99, "codigo_referencia" => "SGS21-001"],
    ["id" => 2, "nombre" => "Laptop HP Pavilion x360", "descripcion" => "Laptop convertible con pantalla táctil de 14 pulgadas, procesador Intel Core i5, 8GB de RAM, 256GB SSD.", "precio" => 899.99, "codigo_referencia" => "HPX360-002"],
    ["id" => 3, "nombre" => "Auriculares Inalámbricos Sony WH-1000XM4", "descripcion" => "Auriculares con cancelación de ruido, batería de larga duración y calidad de sonido excepcional.", "precio" => 349.99, "codigo_referencia" => "SWH1000XM4-003"]
];


if (isset($_GET['id'])) {
    $producto_id = $_GET['id'];

    $producto = null;
    foreach ($productos as $prod) {
        if ($prod["id"] == $producto_id) {
            $producto = $prod;
            break;
        }
    }

    if ($producto) {
        echo "<h1>{$producto['nombre']}</h1>";
        echo "<p>Precio: {$producto['precio']} €</p>";
        echo "<p>Descripción Extendida: {$producto['descripcion']}</p>";
        echo "<p>Código de Referencia: {$producto['codigo_referencia']}</p>";
    } else {
        echo "<p>Producto no encontrado.</p>";
    }

    echo "<a href='ejercicio09.php'>Volver</a>";
} else {
    echo "<p>No se proporcionó un ID de producto válido.</p>";
}
?>
