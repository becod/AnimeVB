<?php
    include('../core.php');
    require_once ('../model/db_connect.php');

 	session_start();
 
        
    $title= $_POST["title"];
    $about= $_POST["plot"];
    $img= $_FILES["image"]["name"];
    $tmp =  $_FILES['image']['tmp_name'];
    
    
    $ruta = "../../../content/img/".$img;
                      
    $i = move_uploaded_file($_FILES['image']['name'],'../../../../content/img/'.$_FILES['image']['name']);
          

    if ($i){ 
            /*$query = new PDOconnect;
            $query -> queryList('Insert into animeinfo(name,about,img,id_user) values (:title, :about, :img, :id_user)', array(':title' => $title, ':about' => $about, ':img' => $img, ':id_user' => $_SESSION['id'] )); */
        echo ' Enviado';
    } else{
        
        echo $tmp;
    } 
?> 