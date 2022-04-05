+<?php
    require_once("../php/proLP.crud.php");
    $id = $_GET['id'];
    if(deleteTestimonials($id)){
        header('Location: ../testimonial.table.php?success');
        exit;
    }
    header('Location: ../testimonial.table.php?error');
    exit;