<?php
session_start();

$usuarios = [
    "markel" => "123",
    "laura" => "321",
    "jorge" => "111"
];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] == $contrasena) {
        $_SESSION["usuario"] = $usuario;
        header("Location: ejercicio05.php");
        exit();
    } else {
        $mensajeError = "Usuario o contraseña incorrectos.";
    }
}

require 'ejercicio05.view.php';