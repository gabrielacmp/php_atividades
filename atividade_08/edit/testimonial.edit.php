<?php
    require_once("../php/proLP.crud.php");

    $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_NUMBER_INT);
    $image = filter_input(INPUT_POST,'inputImage',FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST,'inputName',FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST,'inputMessage',FILTER_SANITIZE_SPECIAL_CHARS);

    if(updateIcons($id, $image, $nome, $message)){
        header('Location: ../index.php');
        exit;
    }
    header('Location: ../testimonial.form.edit.php?error=true');
    exit;