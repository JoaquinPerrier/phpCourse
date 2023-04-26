<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name']; // Encuentra el nombre del archivo
    $tmp_name = $_FILES['file']['tmp_name']; // Encuentra la ubicación temporal del archivo
    $size = $_FILES['file']['size']; // Encuentra el tamaño del archivo
    $error = $_FILES['file']['error']; // Encuentra los errores (SI LOS HUBIESE)

    // Separa un string (primer parametro es donde se separa, el segundo es la variable). Devuelve un array
    $tempExtension = explode('.', $name);

                                // End devuelve el último valor de un array
    $fileExtension = strtolower(end($tempExtension));

    // Exteneciones que están permitidas
    $isAllowed = array('jpg','jpeg', 'png', 'pdf');

    //  Compara si un array contiene una variable (primer parámetro es la variable, el segundo el array)
    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size<=30000) {
                $newFileName = uniqid('', true) . '.' . $fileExtension;
                
                $fileDestination = "uploads/" . $newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
                header("Location: files.php?uploadedsuccess");
            }else{
                echo " Sorry, your file size is to big <br>";
            }
        }else{
        echo " Sorry, there was an error <br>";
        }
    }else{
        echo " Sorry, your file type is not accepted <br>";
    }
}
?>