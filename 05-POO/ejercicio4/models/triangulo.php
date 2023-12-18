<?php

namespace ejercicio4\models;

class Triangulo extends Poligono{
    public function area(){
        return ($this->getAnchura() * $this->getAltura()) / 2;
    }
}