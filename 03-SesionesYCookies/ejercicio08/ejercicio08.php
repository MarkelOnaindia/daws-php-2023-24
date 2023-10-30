<?php
session_start();

$productos = [
    ["id" => 1, "nombre" => "Smartphone Samsung Galaxy S21", "descripcion" => "Teléfono inteligente con pantalla AMOLED de 6.2 pulgadas, 5G, 128GB de almacenamiento.", "precio" => 799.99],
    ["id" => 2, "nombre" => "Laptop HP Pavilion x360", "descripcion" => "Laptop convertible con pantalla táctil de 14 pulgadas, procesador Intel Core i5, 8GB de RAM, 256GB SSD.", "precio" => 899.99],
    ["id" => 3, "nombre" => "Auriculares Inalámbricos Sony WH-1000XM4", "descripcion" => "Auriculares con cancelación de ruido, batería de larga duración y calidad de sonido excepcional.", "precio" => 349.99]
];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["idioma"])) {
    $idioma = $_POST["idioma"];
    setcookie("idioma", $idioma, time() + (365 * 24 * 60 * 60));
    header("Location: ejercicio08.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["producto_id"])) {
    $producto_id = $_POST["producto_id"];
    $producto = null;
    foreach ($productos as $prod) {
        if ($prod["id"] == $producto_id) {
            $producto = $prod;
            break;
        }
    }
    if ($producto) {
        $_SESSION["cesta"][] = $producto;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comprar"])) {
    unset($_SESSION["cesta"]);
}


require 'ejercicio08.view.php';