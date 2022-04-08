<?php
    require_once("connection.php");

    #Create
        function registerIcons($image, $title, $descript){
            $con = getConnection();
            $sql = "insert into icons (image, title, descript) values (:image, :title, :descript)";
            $result = $con->prepare($sql);
            $result->bindParam(":image", $image);
            $result->bindParam(":title", $title);
            $result->bindParam(":descript", $descript);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute){
                return true;
            }
            return false;
        }

        function registerShowcases($image, $title, $descript){
            $con = getConnection();
            $sql = "insert into showcases (image, title, descript) values (:image, :title, :descript)";
            $result = $con->prepare($sql);
            $result->bindParam(":image", $image);
            $result->bindParam(":title", $title);
            $result->bindParam(":descript", $descript);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute){
                return true;
            }
            return false;
        }

        function registerTestimonials($image, $nome, $message){
            $con = getConnection();
            $sql = "insert into testimonials (image, nome, message) values (:image, :nome, :message)";
            $result = $con->prepare($sql);
            $result->bindParam(":image", $image);
            $result->bindParam(":title", $nome);
            $result->bindParam(":descript", $message);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute){
                return true;
            }
            return false;
        }
        function registerMedias($icon){
            $con = getConnection();
            $sql = "insert into medias (icon) values (:icon)";
            $result = $con->prepare($sql);
            $result->bindParam(":icon", $icon);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute){
                return true;
            }
            return false;
        }
    #/Create

    #Retrieve
        function listIcons(){
            $con = getConnection();
            $sql = "select * from icons";
            $result = $con->prepare($sql);
            $listIcon = array();
            while($icon=$result->fetch(PDO::FETCH_OBJ)){
                array_push($listIcon, $icon);
            }
            unset($con);
            unset($result);
            return $listIcon;
        }

        function listShowcases(){
            $con = getConnection();
            $sql = "select * from showcases";
            $result = $con->prepare($sql);
            $listShowcase = array();
            while($showcase=$result->fetch(PDO::FETCH_OBJ)){
                array_push($listTestimonial, $showcase);
            }
            unset($con);
            unset($result);
            return $listShowcase;
        }

        function listTestimonials(){
            $con = getConnection();
            $sql = "select * from testimonials";
            $result = $con->prepare($sql);
            $listTestimonial = array();
            while($testimonial=$result->fetch(PDO::FETCH_OBJ)){
                array_push($listTestimonial, $testimonial);
            }
            unset($con);
            unset($result);
            return $listTestimonial;
        }

        function listMedias(){
            $con = getConnection();
            $sql = "select * from medias";
            $result = $con->prepare($sql);
            $listMedia = array();
            while($media=$result->fetch(PDO::FETCH_OBJ)){
                array_push($listMedia, $media);
            }
            unset($con);
            unset($result);
            return $listMedia;
        }

        ##Search
        function searchIconsID($id){
            $con = getConnection();
            $sql = "select * from icons where id =:id";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $icon = $stmt->fetch(PDO::FETCH_OBJ);
            unset($con);
            unset($stmt);
            return $icon;
        }    

        function searchShowcasesID($id){
            $con = getConnection();
            $sql = "select * from showcases where id =:id";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $showcase = $stmt->fetch(PDO::FETCH_OBJ);
            unset($con);
            unset($stmt);
            return $showcase;
        }  

        function searchTestimonialsID($id){
            $con = getConnection();
            $sql = "select * from testimonials where id =:id";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $testimonial = $stmt->fetch(PDO::FETCH_OBJ);
            unset($con);
            unset($stmt);
            return $testimonial;
        } 

        function searchMediasID($id){
            $con = getConnection();
            $sql = "select * from medias where id =:id";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $media = $stmt->fetch(PDO::FETCH_OBJ);
            unset($con);
            unset($stmt);
            return $media;
        } 
        ##/Search
    #/Retrieve

    #Update
    function updateIcons($id,$image,$title,$descript){
        $con = getConnection();
        $sql = "update icons set image =:image, title =:title, descript =:descript where id =:id";
        $result = $con->prepare($sql);
        $result->bindParam(":id", $id);
        $result->bindParam(":image", $image);
        $result->bindParam(":title", $title);
        $result->bindParam(":descript", $descript);
        $execute = $result->execute();
        unset($con);
        unset($result);
        if($execute){
            return true;
        }
        return false;
    }

    function updateShowcases($id,$image,$title,$descript){
        $con = getConnection();
        $sql = "update showcases set image =:image, title =:title, descript =:descript where id =:id";
        $result = $con->prepare($sql);
        $result->bindParam(":id", $id);
        $result->bindParam(":image", $image);
        $result->bindParam(":title", $title);
        $result->bindParam(":descript", $descript);
        $execute = $result->execute();
        unset($con);
        unset($result);
        if($execute){
            return true;
        }
        return false;
    }

    function updateTestimonials($id,$image,$nome,$message){
        $con = getConnection();
        $sql = "update testimonials set image =:image, nome =:nome, message =:message where id =:id";
        $result = $con->prepare($sql);
        $result->bindParam(":id", $id);
        $result->bindParam(":image", $image);
        $result->bindParam(":nome", $nome);
        $result->bindParam(":message", $message);
        $execute = $result->execute();
        unset($con);
        unset($result);
        if($execute){
            return true;
        }
        return false;
    }

    function updateMedias($id,$icon){
        $con = getConnection();
        $sql = "update medias set icon =:icon where id =:id";
        $result = $con->prepare($sql);
        $result->bindParam(":id", $id);
        $result->bindParam(":icon", $icon);;
        $execute = $result->execute();
        unset($con);
        unset($result);
        if($execute){
            return true;
        }
        return false;
    }
    #/Update

    #Delete
        function deleteIcons($id){
            $con = getConnection();
            $sql = "delete from icons where id =:id";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $status = $stmt->execute();
            unset($con);
            unset($stmt);
            if($status)
                return true;
            return false;
        }

        function deleteShowcases($id){
            $con = getConnection();
            $sql = "delete from showcases where id =:id";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $status = $stmt->execute();
            unset($con);
            unset($stmt);
            if($status)
                return true;
            return false;
        }

        function deleteTestimonials($id){
            $con = getConnection();
            $sql = "delete from testimonials where id =:id";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $status = $stmt->execute();
            unset($con);
            unset($stmt);
            if($status)
                return true;
            return false;
        }

        function deleteMedias($id){
            $con = getConnection();
            $sql = "delete from medias where id =:id";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $status = $stmt->execute();
            unset($con);
            unset($stmt);
            if($status)
                return true;
            return false;
        }
    #/Delete