<?php
function diaSemana($numeroDia) {
    switch ($numeroDia) {
        case 1:
            return "El día número 1 es lunes.";
        case 2:
            return "El día número 2 es martes.";
        case 3:
            return "El día número 3 es miércoles.";
        case 4:
            return "El día número 4 es jueves.";
        case 5:
            return "El día número 5 es viernes.";
        case 6:
            return "El día número 6 es sábado.";
        case 7:
            return "El día número 7 es domingo.";
        default:
            return "No es ningún día de la semana.";
    }
}

$numeroDia = $_GET['numeroDia'];

$mensajeDiaSemana = diaSemana($numeroDia);

require 'ejercicio18.view.php';