<?php

include 'models/poligono.php';
include 'models/cuadrado.php';
include 'models/triangulo.php';

use ejercicio4\models\Poligono;
use ejercicio4\models\Cuadrado;
use ejercicio4\models\Triangulo;


$cuadrado = new Cuadrado();
$cuadrado->setAltura(4);
$cuadrado->setAnchura(5);
echo 'Área del cuadrado: ' . $cuadrado->area() . "\n";

echo '<br>';

$triangulo = new Triangulo();
$triangulo->setAltura(20);
$triangulo->setAnchura(5);
echo 'Área del triángulo: ' . $triangulo->area() . "\n";