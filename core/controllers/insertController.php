<?php
    include('../core.php');
 	session_start();
 
        
    $title= $_POST["title"];
    $about= $_POST["plot"];
    $file= $_FILES["image"]["name"];
    $img = "content/img/".$file;
                      
    $i = move_uploaded_file($_FILES['image']['tmp_name'], "../../content/img/".$file);

    if ($i){ 
        
        $query = new PDOconnect;
        $query -> queryList('Insert into animeinfo(name,about,img,id_user) values (:title, :about, :img, :id_user)', array(':title' => $title, ':about' => $about, ':img' => $img, ':id_user' => $_SESSION['id'] ));
        echo 1;
    } else{
        
        echo 0;
    } 
?> 