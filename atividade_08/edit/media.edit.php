<?php
    require_once("../php/proLP.crud.php");

    $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_NUMBER_INT);
    $icon = filter_input(INPUT_POST,'inputIcon',FILTER_SANITIZE_SPECIAL_CHARS);

    if(updateMedias($id, $icon)){
        header('Location: ../index.php');
        exit;
    }
    header('Location: ../media.form.edit.php?error=true');
    exit;