<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    // Crea el archivo
    $myFile = fopen("uploads/file.txt", "w");
    $txt = "My name is JP";
    // Inseta texto en el archivo
    fwrite($myFile, $txt);
    echo $myFile . "<br>";

    $txt = "My age is morsita". $_POST['age'] . "\n";
    if(isset($_POST['submit'])){

        fwrite($myFile, $txt);

        fclose($myFile);
    }


?>

<form action="fileput.php" method="post">
    <input type="text" name="age">
    <input type="submit" name="submit">
</form>
</body>
</html>