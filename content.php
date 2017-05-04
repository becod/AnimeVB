<?php 
    session_start();
    $file=fopen("content/info/content.txt", "r");

    while(!feof($file)){
        $line=fgets($file);
        
        list($id, $user, $title, $plot, $img) = explode(";",$line);	
        require ('templates/content/layout.php');
    }
?>
