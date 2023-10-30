<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    setcookie("usuario", $usuario);
    header("Location: ejercicio01.php");
    exit();
}
require 'ejercicio01.view.php';