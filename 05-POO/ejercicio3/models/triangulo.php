<?php

namespace ejercicio3\models;

class Triangulo extends Poligono{
    public function area(){
        return ($this->getAnchura() * $this->getAltura()) / 2;
    }
}