<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // ARITMETICOS
    // Suma
    $suma = 1 + 2;
    // Resta
    $resta = 10 - 3;
    // Multiplicacion
    $multiplicacion = 2 * 3;
    // Division
    $division = 10 / 2;
    // Resto
    $resto = 25 % 5;

    echo "$suma, $resta, $multiplicacion, $division, $resto <br>";

    // OPERADORES DE ASIGNACION
    $x = 5;
    echo "$x <br>";
    // Suma y asignacion
    $x += 5;
    echo "$x <br>";
    // Resta y asignacion
    $x -= 1;
    echo "$x <br>";
    // Multiplicacion y asignacion
    $x *= 5;
    echo "$x <br>";
    // Division y asignacion
    $x /= 10;
    echo "$x <br>";
    // Concatena y asigna
    $string = "Alojaaa";
    $string .= " Como andan muchachos?";
    echo " $string <br>";

    // OPERADORES DE COMPARACION
    $num1 = 10;
    $num2 = 13;
    // Menor o menor/igual
    $num1 < $num2;
    // Mayor o mayor/igual
    $num1 >= $num2;
    // Igual
    $num1 == $num2;
    // Distinto
    $num1 != $num2;
    $num1 <> $num2;
    // Ídenticos
    $num1 === $num2;
    // Spaceship operator  
    // Si el valor de la izquierda es menor al de la derecha, devuelve un -1
    // Si los valores son iguales, devuelve un 0
    // Si el valor de la derecha es menor al de la izquierda, devuelve un 1.
    $num1 <=> $num2;

    // OPERADORES LOGICOS
    $x = 0;
    $y = 10;
    // and &&
    if ($x != $y and 2 < 3) {
        echo "True! <br>";
    } else {
        echo "False! <br>";
    }
    // or ||
    if ($x == $y || 2 < 3) {
        echo "True! <br>";
    } else {
        echo "False! <br>";
    }
    // xor  UNO ES TRUE, PERO NO LOS DOS
    if ($x != $y xor 2 < 3) {
        echo "True! <br>";
    } else {
        echo "False! <br>";
    }
    // ! NEGACION
    if (!$x != $y xor 2 < 3) {
        echo "True! <br>";
    } else {
        echo "False! <br>";
    }
    ?>
</body>
</html>