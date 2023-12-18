<?php

namespace ejercicio5\models;

class Persona {
    public static $personasEnElMundo = 0;

    public function __construct() {
        self::$personasEnElMundo++;
    }

    public static function getPersonasEnElMundo() {
        return self::$personasEnElMundo;
    }
}