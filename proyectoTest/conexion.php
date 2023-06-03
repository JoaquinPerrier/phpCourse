<?php
 class Conexion{
    public function __contruct(
        string $driver = "mysql",
        string $host = "localhost", // ACA IRIA LA DIRECCION DE LA BASE DE DATOS
        string $user = "root",
        string $password = "",
        string $dbName = "sunny_side",
        string $charset = "utf8"
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
