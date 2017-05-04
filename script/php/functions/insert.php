<?php
 	session_start();
    
    $title=$_POST["title"];
    $plot= $_POST["plot"];

	if(isset($_POST["submit_insert"])){
        
		move_uploaded_file(	$_FILES["img"]["tmp_name"],"../../../content/img".$_FILES["img"]["name"]);

		$file=fopen("../../../content/info/content.txt", "r");
		$id;
		while(!feof($file)){
			$line=fgets($file);
			$array=explode(";",$line);
			$id=$array[0]+1;	
		}
           
		fclose($file);
		$file=fopen("../../../content/info/content.txt", "a");
			fwrite($file,"\n".$id.";".$_SESSION['user'].";".$title.";".$plot.";"."img/".$_FILES["img"]["name"]);
			fclose($file);
		header("location: ../../../home.php");
	}