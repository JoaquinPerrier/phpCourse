<?php
// FUNCIONES
$anio = 1994;
                            // ASIGNANDO LE DAMOS UN VALOR DEFAULT
function obtenerEdad($anio,$anioActual = 2023){
    $edad = $anioActual - $anio; 
    echo "Mi edad es: $edad <br>";
}

function retornarEdad($anio,$anioActual = 2023){
    return $anioActual - $anio; 
}

obtenerEdad($anio);
obtenerEdad(2000, 2005);

$obtenerEdadPorFuncion = retornarEdad(2010);
echo "Enviando returns $obtenerEdadPorFuncion <br>";

// Declaraciones de tipo escalar: ES COMO TYPESCRIPT
                    // ACLARAMOS EL TIPO DE DATO ENVIADO COMO PARAM
function echoEdad(int $anio, int $anioActual = 2023){
    $edad = $anioActual - $anio; 
    echo "Mi edad es: $edad <br>";
}

echoEdad(2020, 2030);

// Funciones anónimas. PERMITE USAR VARIABLE AFUERA DE SU SCOPE
$mensaje = "HOLA PERREKE";
$suma = function($numero1, $numero2) use ($mensaje){
    echo $mensaje . "<br>";
    return $numero1 + $numero2;
};

echo "La suma es ". $suma(100, 101) . " mediante una function anonima";
?>