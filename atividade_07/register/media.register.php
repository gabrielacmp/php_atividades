<?php
    require_once("../php/proLP.crud.php");

    $icon = $_POST['inputIcon'];

    if(registerMedias($icon))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: ./media.register.php?error=true');
    exit;