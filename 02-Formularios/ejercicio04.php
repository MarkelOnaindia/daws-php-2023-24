<?php
$usuarios = [
    "usuario1" => "contraseña1",
    "usuario2" => "contraseña2",
    "usuario3" => "contraseña3"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $contrasena) {
        $mensaje = "Bienvenido, " . $usuario;
    } elseif (isset($usuarios[$usuario]) && $usuarios[$usuario] != $contrasena) {
        $mensaje = "Contraseña incorrecta para el usuario " . $usuario;
    } else {
        $mensaje = "El usuario " . $usuario . " no existe.";
    }

}
require "ejercicio04.view.php";
