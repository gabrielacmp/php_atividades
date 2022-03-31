<?php
    require_once("./connection.php");
    #Create
    function registerIcons($image, $title, $descript) 
    {
        $link = getConnection();
        $query = "insert into servicos (image, title, descript) values ('{$image}', '{$title}', '{$descript}')";
        $result = mysqli_query($link, $query);
        mysqli_close($link);
        if($result)
            return true;
        return false; 
    }

    #\Create
    #Retrieve
    function listIcons(){
        $link = getConnection();
        $sql = "select * from icons";
        $result = mysqli_query($link, $sql);
        $listIcon = array();
        while($icon=mysqli_fetch_assoc($result)){
            array_push($listIcon, $icon);
        }
        mysqli_close($link);
        return $listIcon;
    }

    function listShowcases(){
        $link = getConnection();
        $sql = "select * from showcases";
        $result = mysqli_query($link, $sql);
        $listShowcase = array();
        while($showcase=mysqli_fetch_assoc($result)){
            array_push($listShowcase, $showcase);
        }
        mysqli_close($link);
        return $listShowcase;
    }

    function listTestimonials(){
        $link = getConnection();
        $sql = "select * from testimonials";
        $result = mysqli_query($link, $sql);
        $listTestimonial = array();
        while($testimonial=mysqli_fetch_assoc($result)){
            array_push($listTestimonial, $testimonial);
        }
        mysqli_close($link);
        return $listTestimonial;
    }

    function listMedias(){
        $link = getConnection();
        $sql = "select * from medias";
        $result = mysqli_query($link, $sql);
        $listMedia = array();
        while($media=mysqli_fetch_assoc($result)){
            array_push($listMedia, $media);
        }
        mysqli_close($link);
        return $listMedia;
    }