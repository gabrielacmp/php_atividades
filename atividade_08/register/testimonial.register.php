<?php
    require_once("../php/proLP.crud.php");

    $image = filter_input(INPUT_POST,'inputImage',FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST,'inputName',FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST,'inputMessage',FILTER_SANITIZE_SPECIAL_CHARS);

    if(registerTestimonials($image, $nome, $message))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: ./showcase.register.php?error=true');
    exit;