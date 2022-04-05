+<?php
    require_once("../php/proLP.crud.php");
    $id = $_GET['id'];
    if(deleteShowcases($id)){
        header('Location: ../showcase.table.php?success');
        exit;
    }
    header('Location: ../showcase.table.php?error');
    exit;