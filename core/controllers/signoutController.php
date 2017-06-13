<?php
    include('../core.php');

if(isset($_POST['vul'])){
    $vulean = $_POST['vul'];
    if($vulean == 1){ 
        session_start();
        session_destroy();
        echo 1;
        
    } else if($vulean == 0){
        echo 0;
        header('location: '.URL_BASE.'index.php');
    } else{
        header('location: '.URL_BASE.'index.php');
    }
}else{
    header('location: '.URL_BASE.'index.php');
}   
?>