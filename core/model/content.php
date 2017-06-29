<?php
    include('../core.php');

    $db = new PDOconnect;
    $query = $db -> queryList("select `ID`,`post_title`,`post_img` from avb_posts ORDER BY `ID` DESC",array ());
    $result = $query -> fetchAll(PDO::FETCH_OBJ);
    
    echo json_encode($result);
?>
