<?php
    include('../core.php');

    $db = new PDOconnect;
    $query = $db -> queryList("SELECT `ID`, `post_title`, `post_content`, `post_img` FROM `avb_posts` ORDER BY `ID` DESC LIMIT ".NUM_SLIDE."",array ());
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    function getSubStr($termino,$len){
		  $result = substr($termino, 0, $len);
		  $result.="...";
		  return $result;
    }

    for($i=0; $i<count($result); $i++)
    {
        $result[$i]['post_content'] = getSubStr($result[$i]['post_content'], 350);

    }
    echo json_encode($result);
?>