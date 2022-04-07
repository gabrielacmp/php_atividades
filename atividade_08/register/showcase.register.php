<?php
    require_once("../php/proLP.crud.php");

    $image = filter_input(INPUT_POST,'inputImage',FILTER_SANITIZE_SPECIAL_CHARS);
    $title = filter_input(INPUT_POST,'inputTitle',FILTER_SANITIZE_SPECIAL_CHARS);
    $descript = filter_input(INPUT_POST,'inputDescript',FILTER_SANITIZE_SPECIAL_CHARS);

    if(registerShowcases($image, $title, $descript))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: ./showcase.register.php?error=true');
    exit;