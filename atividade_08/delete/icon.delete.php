+<?php
    require_once("../php/proLP.crud.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    
    if(deleteIcons($id)){
        header('Location: ../icon.table.php?success');
        exit;
    }
    header('Location: ../icon.table.php?error');
    exit;