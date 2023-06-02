<?php
// CONVENCIONES: empieza con letra o "_"
$nombre;

// TIPOS DE DATOS:
// String:
$apellido = "Perrier";
// Number:
$edad = 29;
// Float:
$promedio = 7.5;
// Boolean
$isTrue = true;

echo $nombre . " " . $edad . " " . $isTrue . "<br>";

// CONSTANTE
const escuela = "SCJ"; // DE MANERA GLOBAL Y CLASES
define(direccion, "Hipolito y Francia"); // SOLO DE MANERA GLOBAL

echo escuela . "<br>";
echo direccion . "<br>";

// Muestra el tipo de dato de la variable pasada como param
echo gettype(escuela);

// Conversión automática
$numero = 10.5;
$numero1 = 10;
$numero2 = "20";
$suma = $numero1 + $numero2;
$suma2 = $numero + $numero1;

echo $suma; // DEVUELVE 30, PORQUE PHP AUTOMATICAMENTE CAMBIA EL STRING A INT
echo intval($suma2); // FUERZA QUE EL TIPO DE RESULTADO SEA ENTERO
?>