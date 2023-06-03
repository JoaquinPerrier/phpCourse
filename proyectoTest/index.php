<?php
    require_once("usuario.php");

    $usuario = new Usuario(0,"JOse","lopez","3462669057",123);

    $usuario->insertar();
?>