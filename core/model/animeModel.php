<?php
     include('../core.php');
    $anime_id = $_GET['anime'];

    $db = new PDOconnect;
    $query = $db -> queryList("select `ID`,`post_title`,`post_content`,`post_type`,`post_img` from avb_posts WHERE `ID` like :id",array (':id' => $anime_id));
    $result = $query -> fetch(PDO::FETCH_ASSOC);
    
    echo $result;
?>