<?php
session_start();

$usuarios = [
    "markel" => "123",
    "laura" => "321",
    "jorge" => "111"
];

$maxIntentos = 3;

if (!isset($_SESSION["intentos"])) {
    $_SESSION["intentos"] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] == $contrasena) {
        $_SESSION["usuario"] = $usuario;
        header("Location: ejercicio06.php");
        exit();
    } else {
        $mensajeError = "Usuario o contraseña incorrectos.";
        $_SESSION["intentos"]++;

        if ($_SESSION["intentos"] >= $maxIntentos) {
            $mensajeError = "Has superado el número máximo de intentos en esta sesión.";
        }
    }
}

require 'ejercicio06.view.php';