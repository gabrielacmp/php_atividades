<?php
    require_once("../php/proLP.crud.php");

    $image = $_POST['inputImage'];
    $title = $_POST['inputTitle'];
    $descript = $_POST['inputDescript'];

    if(registerIcons($image, $title, $descript)){
        header('Location: ../index.php');
        exit;
    }
    header('Location: ./icon.register.php?error=true');
    exit;