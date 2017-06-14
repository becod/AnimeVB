<?php
    require_once ('db_connect.php');

 	session_start();
 
        
        $title=$_POST["title"];
        $about= $_POST["plot"];
        $img= "content/img/".$_FILES["image"]["name"];
                      
		$i = move_uploaded_file($_FILES["image"]["tmp_name"],"../../../content/img/".$_FILES["image"]["name"]);
          
        if ($i){
            $query = new PDOconnect;
            $query -> queryList('Insert into animeinfo(name,about,img,id_user) values (:title, :about, :img, :id_user)', array(':title' => $title, ':about' => $about, ':img' => $img, ':id_user' => $_SESSION['id'] ));
        }
        else{
            print 'bad';
        } 
?>