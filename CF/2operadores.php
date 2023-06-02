<?php
// OPERADORES
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
?>