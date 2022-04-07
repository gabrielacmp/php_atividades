+<?php
    require_once("../php/proLP.crud.php");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(deleteShowcases($id)){
        header('Location: ../showcase.table.php?success');
        exit;
    }
    header('Location: ../showcase.table.php?error');
    exit;