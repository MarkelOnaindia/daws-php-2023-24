<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idioma = $_POST["idioma"];
    setcookie("idioma", $idioma, time() + 60); 
    header("Location: ejercicio03.php");
    exit();
}

$ultimoIdioma = isset($_COOKIE["idioma"]) ? $_COOKIE["idioma"] : null;

require "ejercicio03.view.php";