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



    ?>
</body>
</html>