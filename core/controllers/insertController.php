<?php
    include('../core.php');
 	session_start();

    //Cambiar los posts por  $_POST["post_title"] & $_POST["post_content"]
    $title= $_POST["title"];
    $content= $_POST["content"];
    $file= $_FILES["image"]["name"];
    $img = "content/anime/".$file;
                      
    $i = move_uploaded_file($_FILES['image']['tmp_name'], "../../content/anime/".$file);

    if ($i){ 
        
        $query = new PDOconnect;
        $query -> queryList('Insert into avb_posts(post_title,post_content,post_img,post_author) values (:title, :content, :img, :author)', array(':title' => $title, ':content' => $content, ':img' => $img, ':author' => $_SESSION['id'] ));
        echo 1;
    } else{
        
        echo 0;
    } 
?> 