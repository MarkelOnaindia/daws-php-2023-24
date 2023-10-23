<?php
// Diccionario de usuarios (nombre de usuario como clave y datos del usuario como array asociativo)
$diccionario = array(
    array(
        "nombre" => "Alejandro",
        "apellidos" => "Martínez García",
        "email" => "alejandro@example.com"
    ),
    array(
        "nombre" => "Laura",
        "apellidos" => "Fernández Díaz",
        "email" => "laura@example.com"
    ),
    array(
        "nombre" => "Sergio",
        "apellidos" => "González López",
        "email" => "sergio@example.com"
    )
);

function getDatos($diccionario, $nombreUsuario, $dato) {
    foreach ($diccionario as $usuario) {
        if ($usuario["nombre"] === $nombreUsuario && array_key_exists($dato, $usuario)) {
            return $usuario[$dato];
        }
    }
    return "Usuario o dato no encontrado";
}

require 'ejercicio15.view.php';
?>
