<?php
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

$p1 = new Publicacion("Markel", "1999", "WIT", "Pepe botella", "Menudo botellon jejeje");
$p1->leer();
echo "<br>";
$p1->escribir(" PepePepePepe");
echo "<br>";
$p1->leer();