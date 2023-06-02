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
echo gettype(escuela)  . "<br>";

// Conversión automática
$numero = 10.5;
$numero1 = 10;
$numero2 = "20";
$suma = $numero1 + $numero2;
$suma2 = $numero + $numero1;

echo $suma  . "<br>"; // DEVUELVE 30, PORQUE PHP AUTOMATICAMENTE CAMBIA EL STRING A INT
echo intval($suma2)  . "<br>"; // FUERZA QUE EL TIPO DE RESULTADO SEA ENTERO

$palabra = "Codigo";
$palabra2 = "Facilito";

// Concatenación a traves del "."
echo "Hola " . $palabra . " " . $palabra2  . "<br>";

// Interpolación
echo "Hola $palabra {$palabra2}Uniendo"  . "<br>" // SE PUEDE INTERPOLAR SOLO EN COMILLAS DOBLES
echo "\"Hola mi amigo\" dijo el capo del sur"  . "<br>";

// Heredoc: funcionan como comillas dobles ""
$saludo = "Hola capo como tay";
echo <<<Frase
$saludo
No cuentes los días, haz que los días cuenten.
Frase  . "<br>";

// NowDoc: funcionan como comillas simples. Es igual a heredoc, pero con comillas en el nombre de la variable
echo <<<'Frase'
$saludo
'Hola perreke'
Frase  . "<br>";

// FUNCIONES DE ARRAYS
// Extracción: substr()
$city = substr("Rosario Central", 0, 7); // 2do param de donde arranca, 3ero donde termina

// Busca la letra inicial de la palabra a buscar: strpos()
$frase = "Hola como va bienvenido a la programación";
$palabrita = "programación";
$buscar = strpos($frase,$palabrita); // Devuelve indice del array

// Reemplaza una palabra o caracter: str_replace()
$RFC = "91 67 1A EC C7";
$buscar2 = " ";
$reemplazo = ":";
$resultado = str_replace($buscar2,$reemplazo,$RFC);
echo $resultado . "<br>";

// Agregar un formato a un string:
$anio = "1994";
$mes = "04";
$dia = "28";
$formato = "%s-%s-%s"; //Es el formato que vamos a aplicar
echo sprintf($formato,$dia,$mes,$anio) . "<br>"; 
?>