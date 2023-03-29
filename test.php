<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php
    $name = "Morsita";

    // ES LO MISMO USAR LLAVES O NO
    echo nl2br("My name is {$name} \r\n"); // \r\n ES PARA SALTO DE LINEA. HAY QUE AGREGAR nl2br

    echo " $name <br>";
    echo "Concatenando ", $name, "<br>";


    echo "Echo with a coma", " everyone" , "<br>"; // LA COMA CONCATENA EL TEXTO EN echo

    print "Hello" . " people<br>"; // EL PUNTO CONCATENA EN print


    // DECLARACIÓN DE VARIABLES:
    // Tienen que empezar con una letra, un guion bajo. Seguido de un numero, una letra o guion bajo
    $city = "Rosario";
    echo "I live in " . $city . "<br>";

    // DATE TYPES
    // Integers:
    $age = 24;
    // Floating point or float
    $price = 10.5;
    // String
    $surname = "Perrier";
    // Boolean
    $is_login = false;
    // Array
    $cars = array("Bwm","Audi","Mercedes");
    $cars2 = array("Renoleta","VW","Rastrojero");
    echo $cars[2]. "<br>"; // MUESTRA MERCEDES
    $myCar = array("Audi", 2016, 60.123);

    var_dump($myCar); // MUESTRA INFO DEL LA VARIABLE

    echo "<br>";

    print_r($myCar); // MUESTRA INFO DE CADA UNO DE LOS LUGARES DEL ARRAY

    echo "<br>";

    $allCars = array_merge($cars,$cars2); // MERGEA 2 ARRAYS PARA CREAR UNO NUEVO
    print_r($allCars);
    echo "<br>";

    // ASSOCIATE ARRAYS: Asocia un index (lo que está antes de la fecha) con un valor (lo que está después de la flecha)
    $associateCars = array("Audi" => 50.000,"Alfa" => 1.200,"Reno" => 34.000);
    var_dump($associateCars);
    echo $associateCars["Audi"]. "<br>"; // MUESTRA MERCEDES
    foreach($associateCars as $key => $value){
        echo "My " . $key . " has ". $value . " kilometers <br>";
    }

    // Multidimensional arrays
    $dobleArrays = array("Expensives"=>array("Bmw","Audi","Alfa romeo"),"Cheaps"=>array("Reno", "Susuki","Fiat"));
    echo $dobleArrays["Expensives"][0] . "<br>"; // SE INDICA ARRAY ASOCIADO Y DSP EL INDEX DEL ARRAY QUE ESTA ADENTRO
    echo $dobleArrays["Cheaps"][0] . "<br>"; // SE INDICA ARRAY ASOCIADO Y DSP EL INDEX DEL ARRAY QUE ESTA ADENTRO


    // Object

    // Resource

    // Null
    $X = null;

    ?>
</body>
</html>