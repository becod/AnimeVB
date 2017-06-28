<?php
    include('../core.php');
 	session_start();

    $title= $_POST["title"];
    $content= $_POST["content"];
    $file= $_FILES["image"]["name"];
    $img = "content/anime/".$file;
                      
    $i = move_uploaded_file($_FILES['image']['tmp_name'], "../../content/anime/".$file);

    if ($i){ 
        
        $query = new PDOconnect;
        $query -> queryList('INSERT INTO avb_posts(post_title,post_content,post_img,post_author) VALUES (:title, :content, :img, :author)', array(':title' => $title, ':content' => $content, ':img' => $img, ':author' => $_SESSION['id'] ));
        echo 1;
    } else{
        
        echo 0;
    } 
?> 