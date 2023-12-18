<?php 

include 'models/persona.php';

use ejercicio5\models\Persona;

$persona1 = new Persona();
$persona2 = new Persona();
$persona3 = new Persona();
$persona4 = new Persona();
$persona5 = new Persona();

echo 'Personas en el mundo: ' . $persona1->getPersonasEnElMundo() . "\n";

echo '<br>';

$persona6 = new Persona();
$persona7 = new Persona();

echo 'Personas en el mundo: ' . $persona1->getPersonasEnElMundo() . "\n";
