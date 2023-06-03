<?php
require_once("conexion.php");
class crud extends Conexion{
    private $pdo;
    public function __contructor(
        public string $tabla,

    ){
        $this->pdo = $this->conexion();
    }

    public function consultarTodo(){
        try {
            $stm = $this->pdo->prepare("SELECT * FROM $this->tabla");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }
    public function consultarUno(int $id){
        try {
            $stm = $this->pdo->prepare("SELECT * FROM $this->tabla WHERE id = ?");
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    public function delete(int $id){
        try {
            $stm = $this->pdo->prepare("DELETE FROM $this->tabla WHERE id = ?");
            $stm->execute([$id]);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    public function crear(string $columnas, string $marcadores, array $datos){
        try {
            $stm = $this->pdo->prepare("INSERT INTO $this->tabla $columnas VALUES $marcadores ");
            $stm->execute([$datos]);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    public function update(string $columnas, string $marcadores, array $datos){
        try {
            $stm = $this->pdo->prepare("UPDATE $this->tabla SET $columnas WHERE id=$id");
            $stm->execute([$datos]);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }
}
?>