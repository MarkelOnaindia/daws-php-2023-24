<?php
session_start();

$productos = [
    ["id" => 1, "nombre" => "Smartphone Samsung Galaxy S21", "descripcion" => "Teléfono inteligente con pantalla AMOLED de 6.2 pulgadas, 5G, 128GB de almacenamiento.", "precio" => 799.99],
    ["id" => 2, "nombre" => "Laptop HP Pavilion x360", "descripcion" => "Laptop convertible con pantalla táctil de 14 pulgadas, procesador Intel Core i5, 8GB de RAM, 256GB SSD.", "precio" => 899.99],
    ["id" => 3, "nombre" => "Auriculares Inalámbricos Sony WH-1000XM4", "descripcion" => "Auriculares con cancelación de ruido, batería de larga duración y calidad de sonido excepcional.", "precio" => 349.99]
];


if (!isset($_SESSION["cesta"])) {
    $_SESSION["cesta"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["agregar"])) {
    $productoId = $_POST["producto_id"];
    foreach ($productos as $producto) {
        if ($producto["id"] == $productoId) {
            $_SESSION["cesta"][] = $producto;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comprar"])) {
    unset($_SESSION["cesta"]);
}

 require "ejercicio07.view.php";