<?php
$array = ["Marines", "Joaquin", "Alvaro"];

echo $array[0] . "<br>";
foreach ($array as $key => $value) {
    echo "Indice: " . $key . ". Nombre: " . $value . ".<br>";
}

// Arreglos asociativos
$datos1 = ["nombre"=>"Marines","apellido"=>"Perrier","edad"=>"29"];
var_dump($datos1);

var_dump($datos1["edad"]);

foreach ($datos1 as $key => $value) {
    echo  $key  . ": ". $value . ".<br>";
}

// Agregar, Eliminar y Modificar Datos en un Arreglo
$alumnos = ["Joaquin", "Robertito", "Juana"];
$datos = ["nombre"=>"Joaquin","apellido"=>"Perrier","edad"=>"29"];

// Agrega dato
array_push($alumnos,"Maria");
$datos["ciudad"] = "Rosario"; // SE PONE LA NUEVA KEY SI O SI, SI ES ASOCIATIVO
var_dump($datos);
echo "<br>";

// Eliminar dato
unset($alumnos[2]);
unset($datos["edad"]);

// Modificar datos
$alumnos[1] = "Roberto";
$datos["nombre"] = "Joaquín";

// FUNCIONES EN ARREGLO:
// count: cuenta longitud del arreglo
var_dump(count($datos));
echo "<br>";

// asort: ordena el arreglo de manera ascendente
asort($datos);
var_dump($datos);
echo "<br>";

// arsort: ordena el arreglo de manera descendente
arsort($alumnos);
var_dump($alumnos);
echo "<br>";

// array_search
var_dump(array_search("Roberto",$alumnos));
echo "<br>";

// array_replace
$nuevosAlumnos= array_replace($alumnos,[1=>"ROBERTO GUEMEZ"]);
var_dump($nuevosAlumnos);
echo "<br>";

// Arreglos multidimencionales
$animales = [
    ["Puma","Jaguar", "Tigre"],
    ["Aguila", "Pato", "Loro"],
    ["Tortuta","Cocodrilo", "Iguana"],
];
        // FILA Y COLUMNA
echo "El animal buscado es " . $animales[0][2] . "<br>";

foreach ($animales as $key => $fila) {
    foreach($fila as $animalito){
        echo $animalito . "<br>";
    }
}

?>