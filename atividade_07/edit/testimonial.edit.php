<?php
    require_once("../php/proLP.crud.php");

    $id = $_POST['inputId'];
    $image = $_POST['inputImage'];
    $nome= $_POST['inputName'];
    $message = $_POST['inputMessage'];

    if(updateIcons($id, $image, $nome, $message)){
        header('Location: ../index.php');
        exit;
    }
    header('Location: ../testimonial.form.edit.php?error=true');
    exit;