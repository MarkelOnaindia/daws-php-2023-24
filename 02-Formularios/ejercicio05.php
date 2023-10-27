<?php
$productos = [
    ["id" => 1, "nombre" => "Cascos", "descripcion" => "Descripción del producto 1", "precio" => 10],
    ["id" => 2, "nombre" => "Raton", "descripcion" => "Descripción del producto 2", "precio" => 15],
    ["id" => 3, "nombre" => "Teclado", "descripcion" => "Descripción del producto 3", "precio" => 20]
];

$totalCompra = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($productos as $producto) {
        $cantidad = $_POST["producto_" . $producto["id"]];
        if ($cantidad > 0) {
            $totalCompra += $cantidad * $producto["precio"];
        }
    }
}

require "ejercicio05.view.php";
