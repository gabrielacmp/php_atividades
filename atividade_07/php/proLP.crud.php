<?php
    require_once("connection.php");

    #Create
        function registerIcons($image, $title, $descript) 
        {
            $link = getConnection();
            $query = "insert into icons (image, title, descript) values ('{$image}', '{$title}', '{$descript}')";
            $result = mysqli_query($link, $query);
            mysqli_close($link);
            if($result)
                return true;
            return false; 
        }
        function registerShowcases($image, $title, $descript) 
        {
            $link = getConnection();
            $query = "insert into showcases (image, title, descript) values ('{$image}', '{$title}', '{$descript}')";
            $result = mysqli_query($link, $query);
            mysqli_close($link);
            if($result)
                return true;
            return false; 
        }
        function registerTestimonials($image, $nome, $message) 
        {
            $link = getConnection();
            $query = "insert into testimonials (image, nome, message) values ('{$image}', '{$nome}', '{$message}')";
            $result = mysqli_query($link, $query);
            mysqli_close($link);
            if($result)
                return true;
            return false; 
        }
        function registerMedias($icon) 
        {
            $link = getConnection();
            $query = "insert into medias (icon) values ('{$icon}')";
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

        ## Search Section
        function searchIconsID($id){
            $link = getConnection();
            $sql = "select * from icons where id = {$id}";
            $icon = mysqli_fetch_object(mysqli_query($link, $sql));
            mysqli_close($link);
            return $icon;
        }

        function searchShowcasesID($id){
            $link = getConnection();
            $sql = "select * from showcases where id = {$id}";
            $showcase = mysqli_fetch_object(mysqli_query($link, $sql));
            mysqli_close($link);
            return $showcase;
        }

        function searchTestimonialsID($id){
            $link = getConnection();
            $sql = "select * from testimonials where id = {$id}";
            $testimonial = mysqli_fetch_object(mysqli_query($link, $sql));
            mysqli_close($link);
            return $testimonial;
        }

        function searchMediasID($id){
            $link = getConnection();
            $sql = "select * from medias where id = {$id}";
            $media = mysqli_fetch_object(mysqli_query($link, $sql));
            mysqli_close($link);
            return $media;
        }
    #/Retrieve

    #Updade
        function updateIcons($id, $image, $title, $descript){
            $link = getConnection();
            $sql = "update icons set image = '{$image}', title = '{$title}', descript = '{$descript}' where id = {$id}";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
            if($result)
                return true;
            return false;
        }

        function updateShowcases($id, $image, $title, $descript){
            $link = getConnection();
            $sql = "update showcases set image = '{$image}', title = '{$title}', descript = '{$descript}' where id = {$id}";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
            if($result)
                return true;
            return false;
        }

        function updateTestimonials($id, $image, $nome, $message){
            $link = getConnection();
            $sql = "update testimonials set image = '{$image}', title = '{$nome}', descript = '{$message}' where id = {$id}";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
            if($result)
                return true;
            return false;
        }

        function updateMedias($id, $icon){
            $link = getConnection();
            $sql = "update medias set icon = '{$icon}' where id = {$id}";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
            if($result)
                return true;
            return false;
        }
    #/Update

    #Delete
        function deleteIcons($id){
            $link = getConnection();
            $sql = "delete from icons where id = {$id}";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
            if($result)
                return true;
            return false;
        }

        function deleteShowcases($id){
            $link = getConnection();
            $sql = "delete from showcases where id = {$id}";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
            if($result)
                return true;
            return false;
        }

        function deleteTestimonials($id){
            $link = getConnection();
            $sql = "delete from testimonials where id = {$id}";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
            if($result)
                return true;
            return false;
        }

        function deleteMedias($id){
            $link = getConnection();
            $sql = "delete from medias where id = {$id}";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
            if($result)
                return true;
            return false;
        }
    #/Delete