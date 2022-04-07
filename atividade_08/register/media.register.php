<?php
    require_once("../php/proLP.crud.php");

    $icon = filter_input(INPUT_POST,'inputIcon',FILTER_SANITIZE_SPECIAL_CHARS);

    if(registerMedias($icon))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: ./media.register.php?error=true');
    exit;