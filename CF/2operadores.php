<?php
// OPERADORES DE COMPARACIÓN
// Comparación igual == 
$raza = "Golden";
var_dump($raza == "Labrador");

// Comparación identico ===
$edad ="18";
var_dump($edad === 18); // DA FALSE PORQUE SON DISTINTOS TIPOS DE DATO

// Distinto != <>
var_dump($raza != "Labrador");
var_dump($raza <> "Golden");

// No idéntido !==
var_dump($edad === 18); // TIENEN QUE SER DISTINTOS TIPO O DATO

// Mayor >
// Menor <
// Mayor o igual >=
// Menor o igual <=
var_dump($edad >= 18);
var_dump($edad < 18);

/* Operador nave espacial1 
El primer valor es Mayor
0 Ambos valores son =
-1 El primer valor es menor*/

var_dump($edad <=> 10); // DEVUELVE 1

// OPERADORES ARITMETICOS
// Suma +
// Resta - 
$numero = 10;
$numero2 = 30;
echo $numero + $numero2;
echo $numero2 - $numero;

// Multiplicación *
// División /
echo $numero2 * $numero;
echo $numero2 / $numero;

// Modulo %
// Exponenciación **
echo $numero2 % $numero;
echo $numero2 ** 2;


// OPERADORES DE ASIGNACIÓN
// Operador de asignación = 
// Operador de asignación por referencia = &: GUARDA EL MISMO LUGAR DE LA MEMORIA (SI CAMBIA a, TAMBIÉN SE GUARDA EN b)
// Operador de asignación para concatenar .=
$a = 10;
$b = &$a;

$saludo = "Hola ";
$saludo .= "Cómo va?" // RESULTADO: Hola Cómo va?

echo $b;

// OPERADORES LÓGICOS
// and &&
$esMayor = $edad>=18;

$regalo = "Si";
$traeRegalo = $regalo == "Si";

var_dump($esMayor && $traeRegalo);

// or ||
var_dump($esMayor || $traeRegalo);

// xor (NO AMBOS VERDADEROS)
var_dump($esMayor xor $traeRegalo);

// no !
var_dump(!$esMayor);

// OPERADORES INCREMENTO Y DECREMENTO
// Incremento ++
// Decremento --
$numero++;
$numero2--;
echo $numero . " " . $numero2;

// OPERADOR TERNARIO ? : ;
$esMayorDeEdad = $edad ? "Es mayor de edad":"Es menor de edad";
echo $esMayorDeEdad;

// OPERADOR ELVIS ?:
$esMayorDeEdad = $edad ?: 5; // Si no posee valor, le da valor por default 5. TIENE QUE SER NULL

// OPERADOR FUSION NULL ?? 
$esMayorDeEdad = $edad ?? 5; // Es como el de arriba, pero permite variable sin nada



?>