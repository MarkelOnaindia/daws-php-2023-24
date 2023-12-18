<?php
include 'models/publicacion.php';

use ejercicio2\models\Publicacion;

$p1 = new Publicacion("Markel", "1999", "WIT", "Pepe botella", "Menudo botellon jejeje");
$p1->leer();
echo "<br>";
$p1->escribir(" PepePepePepe");
echo "<br>";
$p1->leer();