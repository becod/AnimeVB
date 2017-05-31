<?php
    session_start();
    $db = new PDOconnect;
    $query = $db -> queryList("UPDATE `information` SET `name`='victor',`lastname`='domech',`user`='domech',`password`='benja',`email`='vic.doch@gmail.com' where `user` like :user and `password` like :password ",array (':user' => $username, ':password' => $password));
    $result = $query->fetch(PDO::FETCH_OBJ);

    
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