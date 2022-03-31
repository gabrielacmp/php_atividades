<?php
    require_once("./proLP.crud.php");

    $image = $_POST['inputImage'];
    $title = $_POST['inputTitle'];
    $description = $_POST['inputDescript'];

    if(registerIcons($image, $title, $descript))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: ./register.php?error=true');
    exit;