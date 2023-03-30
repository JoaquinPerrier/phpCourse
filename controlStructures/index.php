<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // DECLARACIONES CONDICIONALES:
    // If
    $age = 61;

    if ($age <= 18) {
        echo "You can´t enter <br>";
    } elseif ($age > 60) {
        echo "You are too old <br>";
    } else { 
        echo "You can enter <br>";
    }
    
    // Switch
    $role = "asd";
    switch ($role) {
        case 'Visitor':
            echo "Welcome visitor! <br>";
            break;
        
        case 'Admin':
            echo "Hi armin! <br>";
            break;
        
        default:
        echo "Error. U can´t enter <br>";
            break;
    }

    // While
    $a=1;
    while ($a <= 10) {
        echo $a . "<br>";
        $a++;
    }

    // Do-While
    $w = 1;
    do {
        echo  $w." vez que se imprime el texto <br>";
        $w++;
    } while ($w <= 10);

    // For
    for ($i=0; $i < 3; $i++) { 
        echo  $i." vez que se imprime el texto con for <br>";
    }

    // For each
    $names = array("Tito","Carlitos","Moncholo");
    foreach ($names as $name ) {
        echo $name . "<br>";
    }
    
    $person = array ("Name"=>"Dary","Age"=> 30, "Gender" =>"male");
    foreach ($person as $key => $value) {
        echo $key . ": ". $value . "<br>";
    }
    ?>
</body>
</html>