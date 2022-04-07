<?php

    include_once('../php/proLP.crud.php');

    session_start();
    
    if(filter_input(INPUT_GET, 'id') !== null) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['icon_data'] = searchIconsID($id);
    } else {
        $_SESSION['icon_list'] = listIcons();
    }