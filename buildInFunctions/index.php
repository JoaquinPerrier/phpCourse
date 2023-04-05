<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // FUNCIONES MATEMÁTICAS
    // Ceil: redondea un flotante al integer mayor
    echo ceil(0.45)."<br>";
    
    // Floor: redondea un flotante al integer menor
    echo floor(0.45)."<br>";

    // Round: redondea el número. El segundo parámetro es la cantidad de números dsp de la coma
    echo round(0.65 , 0)."<br>";

    // Exponencial: número e elevado al parámetro que le pases
    echo exp(2)."<br>";

    // FUNCIONES DE STRING
    $str = "Today is a cloudy day";

    // Cantidad de caracteres:
    echo strlen($str). "<br>";

    // Contador de palabras;
    echo str_word_count($str) . "<br>";

    // Encontrar texto en un string
    if (strpos($str, "day")){
        echo "this is a valid sentense <br>";
    } else {
        echo "this is a invalid sentense <br>";
    }

    // Ucwords: todas las primeras letras de las palabras se pasan a mayusculas
    echo ucwords($str) . " <br>";

    // Todo a mayusculas
    echo strtoupper($str) . " <br>";

    // Todo a minusculas
    echo strtolower($str) . " <br>";

    // FUNCIONES DE ARRAY
    $personalInfo = array ("Name"=>"Dary", "Age"=>24, "City"=> "amsterdan");
    $moreInfo = array("State"=>"NH", "Weight"=> 85);

    $personalInfo = array_merge($personalInfo, $moreInfo);

    foreach ($personalInfo as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

    // Imprime solo las keys
    print_r (array_keys($personalInfo));
    echo "<br>";

    // Imprime solo los values
    print_r (array_values($personalInfo));
    echo "<br>";

    // Agrega un valor al final
    $cars = array ("Volkswagen", "Audi", "BMW");
    array_push($cars,"Volvo");
    print_r ($cars);
    echo "<br>";


    // Busca un valor dentro del array, y devuelve la key
    echo array_search("BMW", $cars);
    echo "<br>";

    // Devuelve el número de elementos del array
    echo count($cars);
    echo "<br>";

    // FUNCIONES DE FECHAS Y HORA
    // FECHAS:
    // d = IMPRIME DIA EN NUMEROS. j = IMPRIME DIA SIN CEROS. D = IMPRIME DIA EN LETRAS (PRIMERAS 3). l = IMPRIME EL DIA COMPLETO EN LETRAS.
    // m = IMPRIME MES CON NUMEROS. n = IMPRIME MES SIN CEROS. M = IMRPRIME MES EN LETRAS (3 PRIMERAS). F = IMPRIME MES ENTERO
    // y = IMPRIME EL AÑO CON 2 DÍGITOS. Y = IMPRIME EL AÑO COMPLETO
    echo date('D') . "<br>";

    echo date('j/n/Y') . "<br>";

    // HORAS:
    // g = horas en formato 12-horas sin ceros. h = horas en formato 12-horas con ceros. G = horas in 24-horas sin ceros. H = horas en formato 24-horas con ceros.
    // a = am/pm. A = AM/PM
    // i = minutos sin ceros adelante
    // s = segundos sin ceros adelante.
    
    // Función para setear el timezone a Argentina
    date_default_timezone_set('America/Argentina/Cordoba');

    echo date('H:i:s A') . "<br>";

    // Cadena de caracteres a hora
    $time = strtotime('4:00pm December 03 2019');
    echo $time . "<br>"; // Imprime un timestamp con los segundos desde el 1ro de enero de 1970. Se llama UNIX timestamp



    ?>
</body>
</html>