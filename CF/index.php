<?php
require_once("autocarga.php");
(new AutoCarga())->cargarRutas();

$cliente = new Cliente();
$cliente->nombre = "jose";
echo $cliente->nombre . "HOLAAAAAAAAAAAAAAAAAAAAAAAAAA <br>";
$empleado = new Empleado();
$empleado->nombre = "LUISITO";
$cliente->saludar($empleado);
?>