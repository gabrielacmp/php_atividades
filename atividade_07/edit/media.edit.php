<?php
    require_once("../php/proLP.crud.php");

    $id = $_POST['inputId'];
    $icon = $_POST['inputIcon'];

    if(updateMedias($id, $icon)){
        header('Location: ../index.php');
        exit;
    }
    header('Location: ../media.form.edit.php?error=true');
    exit;