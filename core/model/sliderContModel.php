<?php
    include('../core.php');

    $db = new PDOconnect;
    $query = $db -> queryList("SELECT `ID`, `post_title`, `post_content`, `post_img` FROM `avb_posts` ORDER BY `ID` DESC LIMIT ".NUM_SLIDE."",array ());
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
?>