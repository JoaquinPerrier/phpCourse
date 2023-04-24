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
    // Recoje información de los forms HTML
    if(isset($_POST)){
        echo $_POST['name'] . ", your form is submitted <br>";
    }

    print_r($_POST);

    // $_GET
    // Data va a estar visible en el URL, al momento de darle submit
    /*
    <form action="post.php" method="get">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">SUBMIT</button>
    </form>
    */

    // $_SESSION
    // Es util para usar información importante
    // La sesion existe mientra el explorador esté abierto
    session_start();
    // guardar datos
    $_SESSION['name'] = "Dary";
    $_SESSION['age'] = 28;

    echo "Hello " . $_SESSION["name"] . "<br>";




    // $_COOKIE
    // Se almacenan en la pc del usuario. NO SE GUARDA INFORMACION SENSIBLE
    // Puede poseer 6 argunmentos: nombre, valor, expiración (EN SEGUNDOS. Si no se incluye, la cookie dura lo que dure la session), path del sv, dominio, seguridad 
    $time = time() + 86400 * 30;
    setcookie("name","Daryl", $time);

    print_r($_COOKIE);

    // $_SERVER
    // $_FILES
?>

<form action="post.php" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <button type="submit">SUBMIT</button>
</form>

</body>
</html>