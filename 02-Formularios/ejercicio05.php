<?php
$productos = [
    ["id" => 1, "nombre" => "Cascos", "descripcion" => "Auriculares para una experiencia de sonido inmersiva", "precio" => 10],
    ["id" => 2, "nombre" => "Raton", "descripcion" => "Ratón ergonómico para una navegación precisa", "precio" => 15],
    ["id" => 3, "nombre" => "Teclado", "descripcion" => "Teclado mecánico para una escritura cómoda y rápida", "precio" => 20]
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
?>
