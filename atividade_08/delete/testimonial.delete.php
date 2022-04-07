+<?php
    require_once("../php/proLP.crud.php");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(deleteTestimonials($id)){
        header('Location: ../testimonial.table.php?success');
        exit;
    }
    header('Location: ../testimonial.table.php?error');
    exit;