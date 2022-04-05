+<?php
    require_once("../php/proLP.crud.php");
    $id = $_GET['id'];
    if(deleteIcons($id)){
        header('Location: ../icon.table.php?success');
        exit;
    }
    header('Location: ../icon.table.php?error');
    exit;