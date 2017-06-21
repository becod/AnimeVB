<?php
    include('../core.php');

    $db = new PDOconnect;
    $query = $db -> queryList("SELECT `id`, `name`, `about`,  `img` FROM `animeinfo` ORDER BY `id` DESC LIMIT 5",array ());
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
?>