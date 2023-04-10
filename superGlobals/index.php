<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    // Superglobals
    // GLOBALS: VARIABLE ACCSIBLE DESDE CUALQUIER PARTE DEL CODIGO
    $x = 100;
    $y = 100;

    function add() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    add();
    echo $z;

    // $_POST
    // $_GET
    // $_SERVER
    // $_COOKIE
    // $_SESSION
    // $_FILES
?>
</body>
</html>