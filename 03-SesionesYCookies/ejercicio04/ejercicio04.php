<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    $_SESSION["asistentes"][] = $nombre;
    header("Location: ejercicio04.php");
    exit();
}

if (isset($_POST["borrar_lista"])) {
    unset($_SESSION["asistentes"]);
    header("Location: ejercicio04.php");
    exit();
}

$asistentes = isset($_SESSION["asistentes"]) ? $_SESSION["asistentes"] : [];

require "ejercicio04.view.php";