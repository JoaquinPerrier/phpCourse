<?php
require_once("6POO.php");
require_once("empleado.php");

class Cliente extends Persona{
    public function __construct(
        public bool $esFrecuente = false,
        public string $correo = "",
    ){}

    function comer(){
        
    }

    function saludar(Empleado $empleado){
        echo "Felicidades chef ". $empleado->nombre . "<br>";
    }
}

?>