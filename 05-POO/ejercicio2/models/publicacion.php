<?php
namespace ejercicio2\models;

class Publicacion{
    private $autores;
    private $ano;
    private $editorial;
    private $titulo;
    private $texto;

    public function __construct($autores, $ano, $editorial, $titulo, $texto){
        $this->autores = $autores;
        $this->ano = $ano;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function leer(){
        echo $this->texto;
    }

    public function escribir(string $extra) {
        $this->texto .= $extra;
    }
}