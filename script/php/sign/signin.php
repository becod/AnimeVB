<?php
    require_once ('../functions/db_connect.php');

    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    
 if (isset($username)&&isset($password)) {
     
    $query = new PDOconnect;
    $query -> queryList("SELECT `user`,`password` FROM `user` WHERE `user` LIKE ':user' and `password` LIKE ':password'",array (':user' => $username, ':password' => $password));

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