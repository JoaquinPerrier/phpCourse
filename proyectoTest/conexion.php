<?php
 class Conexion{
    public function __construct(
        public string $driver = "mysql",
        public string $host = "localhost", // ACA IRIA LA DIRECCION DE LA BASE DE DATOS
        public string $user = "root",
        public string $password = "",
        public string $dbName = "sunny_side",
        public string $charset = "utf8"
    ){}

    protected function conexion(){
        try{
            $pdo = new PDO("$this->driver:host=$this->host;dbname=$this->dbName;charset=$this->charset", $this->user,$this->password);
            return $pdo;
        }catch(PDOException $mensaje){
            echo $mensaje->getMessage();

        }
    }
 }
?>
