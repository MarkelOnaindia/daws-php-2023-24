<?php

namespace ejercicio4\models;

abstract class Poligono {
    private $color;
    private $altura;
    private $anchura;

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getAnchura() {
        return $this->anchura;
    }

    public function setAnchura($anchura) {
        $this->anchura = $anchura;
    }

    abstract public function area();
}
?>
