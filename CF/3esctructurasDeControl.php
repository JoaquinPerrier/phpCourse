<?php
// If
$edad = 21;
if ($edad >=18){
    echo "Es mayor de edad" . "<br>";
}else{
    echo "Es menor de edad" . "<br>";
}

// Switch
$camisa = "verde";
switch ($camisa) {
    case 'gris':
        echo "Tiene una camisa gris" . "<br>";
        break;
    
    case 'verde':
        echo "Tiene una camisa gris" . "<br>";
        break;
    
    default:
        echo "El loco está en cuero" . "<br>";
        break;
}

// Match: SIMILAR A SWITCH, SE USA POCO Y NATTY
echo match($camisa){
    "gris"=>"Tiene una camisa gris" . "<br>",
    "verde"=>"Tiene una camisa verde" . "<br>"
};

// While
$repeticiones = 0;
while ($repeticiones <= 10) {
    echo "La cantidad de repeticiones del WHILE es " . $repeticiones . "<br>";
    $repeticiones++;
}

// Do while
$repeticiones2 = 0;
do {
    echo "La cantidad de repeticiones del DO WHILE es " . $repeticiones2 . "<br>";
    $repeticiones2++;
} while ($repeticiones2 <= 10);

// For
for ($i=0; $i < 5; $i++) { 
    echo "La cantidad de repeticiones del FOR es " . $i . "<br>";
}

// Foreach
$array = ["Marines", "Joaquin", "Alvaro"];
foreach ($array as $key => $value) {
    echo $key . " " . $value . "<br>";
}
?>