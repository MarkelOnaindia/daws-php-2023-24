<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    setcookie("usuario", $usuario);
    header("Location: ejercicio02.php");
    exit();
}

if (isset($_POST["borrar_cookie"])) {
    setcookie("usuario", "", time() - 3600);
    header("Location: ejercicio02.php");
    exit();
}

require 'ejercicio02.view.php';