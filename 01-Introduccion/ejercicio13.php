<?php

$animales = ['Perro', 'Gato', 'Babirusa', 'Fenec'];
$colores = ['Azul', 'Verde', 'Rojo', 'Amarillo'];

// Calcular el número de elementos de cada array
$numAnimales = count($animales);
$numColores = count($colores);

// Añadir un elemento al final del array $animales
array_push($animales, 'Elefante');

// Añadir un elemento al principio del array $colores
array_unshift($colores, 'Negro');

// Crear un tercer array que incluya los elementos de los dos arrays
$tercerArray = array_merge($animales, $colores);

require 'ejercicio13.view.php';