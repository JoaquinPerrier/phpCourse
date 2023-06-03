<?php
require_once("crud.php");
require_once("conexion.php");

$conexionTest = new Conexion();
echo $conexionTest->driver;
class Usuario extends crud{

    public function __construct(
        public int $id = 0,
        public string $nombre ="",
        public string $apellido = "",
        public string $telefono = "",
        public int $edad = 1
    ){
        parent::__construct("usuario");
    }

    public function insertar(){
        $this->crear("id,nombre,apellido,telefono,edad","?,?,?,?,?",[$this->id,$this->nombre,$this->apellido,$this->telefono,$this->edad]);
    }
}

?>