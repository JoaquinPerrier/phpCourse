<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Función sin parametros
    function myFunction(){
        $name = "Morsa";
        echo "Hello! $name <br>";
    }

    myFunction();

    // funcion con parámetros
    $x = 1;
    $y = 2;    
                                // SE LE DA UN VALOR DEFAULT
    function calculator($num1, $num2 = 20){
        echo $num1*$num2 . "<br>";
    }

    calculator($x);

    // RETORNOS DE LAS FUNCIONES
    // Retornos por valor
    $num1 = 10;
    $num2 = 23;
    function add($x, $y){
        return $x + $y;
    }
    echo "The result is " . add($num1, $num2). "<br>";

    // Retornos por valor
    $test = 12;
    function addByValue($x){
        $x += 5;
    }
    // Se agrega el & para pasar por referencia
    function addByReference(&$x){
        $x +=300;
    }

    addByValue($test);
    echo "The value is: " . $test . "<br>";

    addByReference($test);
    echo "The value is: " . $test . "<br>";

    // CONSTANTES
    // 1er parametro: nombre de la variable, 2do parametro: valor de la variable
    define("COMPANY_NAME", "Apple");

    // con "const" se pueden definir
    const MY_NAME = "Dary";

    // Para imprimir la constante, no se usa el signo pesos
    echo COMPANY_NAME . MY_NAME;

    ?>
</body>
</html>