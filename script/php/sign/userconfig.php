<?php
    session_start();
    $path ='../../logs/user.txt';

    if (isset(session_start())) {
        $file=@fopen($path, 'r');
        while(!feof($file)){
            $line=fgets($file);
            $array=explode(";", trim($line));
            
            if($array[3]==$username && $array[4]==$password){
                
                $_SESSION['name']= $array[0];
                $_SESSION['lname']= $array[1];
                $_SESSION['mail']= $array[2];
                $_SESSION['user'] = $array[3];
                $_SESSION['pass']= $array[4];
                $_SESSION['status'] = 'Authenticated';
                                
                break;
            }
        }
        $closeFile = fclose($file);    
        header('location: ../../home.php');
    }  

 


?>