<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroUsuario = $_POST["numero"];

    $numerosAleatorios = [];
    for ($i = 0; $i < 20; $i++) {
        $numerosAleatorios[] = random_int(1, 10);
    }

    $vecesAparece = array_count_values($numerosAleatorios)[$numeroUsuario];
    
}

require "ejercicio03.view.php";
