<?php
if(isset($_POST['submit'])){
    $name = trim($_POST['name']); // trim elimina los espacios en blanco antes o dsp del nombre
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']); 
    $message = trim($_POST['message']);

    $myMail = "joaquinperrier@hotmail.com";
    $header = "From: " . $email;
    $message2 = "You have recived a message from " . $name . ". \n\n" . $message;

    // ENVIA MAIL
    // 1er param = Correo. 2do param = asunto. 3er param = mensaje, 4to param = Header
    mail($myMail, $subject, $message2, $header);

    // DONDE REDIRIGE DSP DE ENVIAR EL CORREO
    header("Location: index.php?mailsend");
}
?>