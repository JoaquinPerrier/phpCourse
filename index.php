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

    ?>
</body>
</html>