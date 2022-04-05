+<?php
    require_once("../php/proLP.crud.php");
    $id = $_GET['id'];
    if(deleteMedias($id)){
        header('Location: ../media.table.php?success');
        exit;
    }
    header('Location: ../media.table.php?error');
    exit;