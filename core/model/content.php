<?php
    include('../core.php');

    $db = new PDOconnect;
    $query = $db -> queryList("select `ID`,`post_title`,`post_content`,`post_img` from avb_posts",array ());
    $result = $query -> fetchAll(PDO::FETCH_OBJ);
    /*$result = $query->fetchAll(PDO::FETCH_ASSOC);
    for($i=0; $i<count($result); $i++)
    {
        $result[$i]["post_content"] = utf8_encode($result[$i]["about"]);
    }*/
    echo json_encode($result);

    
    /*for($i=0; $i<count($result); $i++){
        $id_anime = $result[$i] -> id;
        $name_anime = $result[$i] -> name;
        $about_anime = $result[$i] -> about;
        $img_anime = $result[$i] -> img;
        
        $infoMin = getSubstr($about_anime,350);
        require('templates/content/layout.php');
    }
	function getSubstr($termino,$len){
		$result = substr($termino, 0, $len);
		$result.="...";
		return $result;
	}*/
?>
