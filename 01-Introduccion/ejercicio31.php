<?php
$randomNumbers = [];
for ($i = 0; $i < 20; $i++) {
    $randomNumbers[] = random_int(1, 999);
}

$valorMasAlto = max($randomNumbers);
$valorMasBajo = min($randomNumbers);

require 'ejercicio31.view.php';
