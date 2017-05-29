<?php
    
    $username = $_POST['user'];
    $password = $_POST['pass'];

    require_once ('../functions/db_connect.php');
    $query = new PDOconnect;
    $query -> queryList("select `username`,`password` from `user` ",array ('where `username` like $username% ', $password) );

    //$path ='../../logs/user.txt';
    $username = $_POST['user'];
    $password = $_POST['pass'];

  /*  if (isset($username)&&isset($password)) {
        //$file=@fopen($path, 'r');
        while(!feof($file)){
            
            $line=fgets($file);
            $array=explode(";", trim($line));
            
            echo $line;
            if($array[3]==$username && $array[4]==$password){
                session_start();
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
       // header('location: ../../../home.php');
    }  */

 


?>