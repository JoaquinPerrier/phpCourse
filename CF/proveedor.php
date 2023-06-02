<?php
require_once("6POO.php");
require_once("operaciones.php");

class Proveedor extends Persona{
    use Operaciones;

    public function __construct(
        public string $cuenta ="",
        public string $banco="",
    ){}

    function productos(){

    }
}

?>