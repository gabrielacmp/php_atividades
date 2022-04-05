<?php
    require_once("../php/proLP.crud.php");

    $id = $_POST['inputId'];
    $image = $_POST['inputImage'];
    $title = $_POST['inputTitle'];
    $descript = $_POST['inputDescript'];

    if(updateShowcases($id, $image, $title, $descript)){
        header('Location: ../index.php');
        exit;
    }
    header('Location: ../showcase.form.edit.php?error=true');
    exit;