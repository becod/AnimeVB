<?php 

    $file=fopen("content/info/content.txt", "r");

    while(!feof($file)){
        $line=fgets($file);
        list($id, $user, $title, $plot, $img) = explode(";",$line);
        $infoMin = getSubstr($plot,250);
        require('templates/content/layout.php');
    }
    fclose($file);

	function getSubstr($termino,$len){
		$result = substr($termino, 0, $len);
		$result.="...";
		return $result;
	}
?>
