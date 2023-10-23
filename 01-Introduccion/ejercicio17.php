<?php
$usuarios = [
    "1" => [
        "nombre" => "Pedro",
        "password" => "123",
        "email" => "pedrolo@php.net"
    ],
    "2" => [
        "nombre" => "Eduardo",
        "password" => "321",
        "email" => "eduardo@example.com"
    ],
    "3" => [
        "nombre" => "Laura",
        "password" => "121",
        "email" => "laura@example.com"
    ],
];

function validarCredenciales($usuarios, $usuario, $contrasena) {
    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario]["password"] === $contrasena) {
        return true;
    } else {
        return false;
    }
}

$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];

$credencialesValidas = validarCredenciales($usuarios, $usuario, $contrasena);

require 'ejercicio17.view.php';