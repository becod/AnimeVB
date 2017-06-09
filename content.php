<?php 
    require_once('script/php/functions/db_connect.php');

    $db = new PDOconnect;
    $query = $db -> queryList("select `id`,`name`,`about`,`img` from animeinfo",array ());
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    for($i=0; $i<count($result); $i++)
    {
        $result[$i]["about"] = utf8_encode($result[$i]["about"]);
    }
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
