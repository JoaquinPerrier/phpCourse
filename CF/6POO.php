<?php
// Programación orientada a objetos
class Persona{ // PARA HACERLA ABSTRACTA, SE PONE abstract ANTES DE class
    // VARIABLES DE INSTANCIA
    public $nombre;
    private $apellido;
    public $edad;
    public $telefono;
    // VARIABLES DE CLASE
    static $idioma;

    // CONSTRUCTOR
    public function __construct(string $nombre = "", string $apellido = "", string|int $edad = 0, string|int $telefono = 3462, string $idiomaPred = "Franchute"){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->telefono = $telefono;
        $this->idioma = $idiomaPred;
    }
    /* CONSTRUCTOR DESDE LA VERSION 8 DE PHP (HAY QUE BORRAR LOS VALORES DE ARRIBA DE TODO)
     public function __construct(
        public string $nombre = "", 
        private string $apellido = "", 
        public int $edad = 0,
        public int $telefono = 3462, 
    ){}
    */

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function __get($name){
        return $this->$name;
    }

    public function __set($name,$value){
        $this->$name = $value;
    }

    // METODOS
    function hablar($tema){
        // PARA USAR VARIABLES DE INSTANCIA, SE USA $this->variable
        echo "Soy ", $this->nombre , ", hablo sobre $tema y es un " , $this->temaEsExtenso($tema ) . "<br>";
    }

    function ver(){
        echo "Soy ", $this->nombre , ", hablo sobre $tema <br>";
    }

    function cantar(){

    }

    private function temaEsExtenso($tema){
        if($tema == "politica"){
            return "tema Extenso";
        }else{
            return "tema piolita";
        };
    }

    // DESTRUCTOR
    public function __destruct(){
        
    }
}

// require_one("persona.php")
$jose = new Persona();
$jose->nombre="Jose";
$sofia = new Persona();
$sofia->nombre="Sofia";
$jose->hablar("UFC");
echo $jose->nombre . "<br>";
$sofia->hablar("Folbal");
echo $sofia->nombre . "<br>";

// ASIGNAR UN VALOR A UNA VARIABLE DE CLASE
echo Persona::$idioma . "<br>";

// GETTERS Y SETTERS
$jose->setTelefono(3462669057);
echo $jose->getTelefono() . "<br>";
echo $jose->__get("nombre") . "<br>". "<br>";

// Usando constructor
$joaquin = new Persona("Joaquin", "Perrier", 28);
echo $joaquin->nombre . " " . $joaquin->apellido . " " . $joaquin->edad . "<br>" ;
?>