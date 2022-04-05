<?php
    require_once("../php/proLP.crud.php");

    $image = $_POST['inputImage'];
    $nome = $_POST['inputNome'];
    $message = $_POST['inputMessage'];

    if(registerTestimonials($image, $nome, $message))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: ./showcase.register.php?error=true');
    exit;