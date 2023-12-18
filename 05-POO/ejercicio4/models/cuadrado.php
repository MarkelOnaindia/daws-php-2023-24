<?php

namespace ejercicio4\models;

class Cuadrado extends Poligono{
    public function area(){
        return $this->getAltura() * $this->getAnchura();
    }
}