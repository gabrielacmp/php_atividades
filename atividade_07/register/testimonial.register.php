<?php
    require_once("../php/proLP.crud.php");

    $image = $_POST['inputImage'];
    $nome = $_POST['inputNome'];
    $message = filter_input(INPUT_POST,'inputMessage',FILTER_SANITIZE_SPECIAL_CHARS);

    if(registerTestimonials($image, $nome, $message))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: ./showcase.register.php?error=true');
    exit;