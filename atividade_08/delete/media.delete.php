+<?php
    require_once("../php/proLP.crud.php");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(deleteMedias($id)){
        header('Location: ../media.table.php?success');
        exit;
    }
    header('Location: ../media.table.php?error');
    exit;