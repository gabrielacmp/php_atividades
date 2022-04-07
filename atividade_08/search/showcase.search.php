<?php

    include_once('./php/proLP.crud.php');

    session_start();

    if(filter_input(INPUT_GET, 'id') !== null) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['showcase_data'] = searchShowcasesID($id);
    } else {
        $_SESSION['showcase_list'] = listShowcases();
    }