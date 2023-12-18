<?php

include 'models/poligono.php';
include 'models/cuadrado.php';
include 'models/triangulo.php';

use ejercicio3\models\Poligono;
use ejercicio3\models\Cuadrado;
use ejercicio3\models\Triangulo;


$cuadrado = new Cuadrado();
$cuadrado->setAltura(4);
$cuadrado->setAnchura(5);
echo 'Área del cuadrado: ' . $cuadrado->area() . "\n";

echo '<br>';

$triangulo = new Triangulo();
$triangulo->setAltura(30);
$triangulo->setAnchura(5);
echo 'Área del triángulo: ' . $triangulo->area() . "\n";