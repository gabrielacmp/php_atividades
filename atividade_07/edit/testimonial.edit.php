<?php
    require_once("../php/proLP.crud.php");

    $id = $_POST['inputId'];
    $image = $_POST['inputImage'];
    $nome= $_POST['inputName'];
    $message = filter_input(INPUT_POST,'inputMessage',FILTER_SANITIZE_SPECIAL_CHARS);

    if(updateIcons($id, $image, $nome, $message)){
        header('Location: ../index.php');
        exit;
    }
    header('Location: ../testimonial.form.edit.php?error=true');
    exit;