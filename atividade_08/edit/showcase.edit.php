<?php
    require_once("../php/proLP.crud.php");

    $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_NUMBER_INT);
    $image = filter_input(INPUT_POST,'inputImage',FILTER_SANITIZE_SPECIAL_CHARS);
    $title = filter_input(INPUT_POST,'inputTitle',FILTER_SANITIZE_SPECIAL_CHARS);
    $descript = filter_input(INPUT_POST,'inputDescript',FILTER_SANITIZE_SPECIAL_CHARS);

    if(updateShowcases($id, $image, $title, $descript)){
        header('Location: ../index.php');
        exit;
    }
    header('Location: ../showcase.form.edit.php?error=true');
    exit;