<?php
    require_once ('db_connect.php');

 	session_start();

	if(isset($_POST["submit_insert"])){
        
        $title=$_POST["title"];
        $about= $_POST["plot"];
        $img= "content/img/".$_FILES["image"]["name"];
        
		move_uploaded_file($_FILES["image"]["tmp_name"],"content/img/".$_FILES["image"]["name"]);
          
        
       /* $query = new PDOconnect;
        $query -> queryList('Insert into animeinfo(name,about,img,id_user) values (:title, :about, :img, :id_user)', array(':title' => $title, ':about' => $about, ':img' => $img, ':id_user' => $_SESSION['id'] ));*/
        
		/*$file=fopen("../../../content/info/content.txt", "r");
		$id;
		while(!feof($file)){
			$line=fgets($file);
			$array=explode(";",$line);
			$id=$array[0]+1;	
		}
           
		fclose($file);*/
		/*$file=fopen("../../../content/info/content.txt", "a");
        fwrite($file,"\n".$id.";".$_SESSION['user'].";".$title.";".$plot.";"."content/img/".$_FILES["image"]["name"]);
			fclose($file);*/
		//header("location: ../../../home.php");
	}