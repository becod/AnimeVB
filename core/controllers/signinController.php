<?php
    include('../core.php');
    

if(isset($_POST['user']) && isset($_POST['pass'])){
    
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    
    if (isset($username)&&isset($password)){ 
 
                $db = new PDOconnect;
                $query = $db -> queryList("select `id`,`name`,`lastname`,`user`,`email` from information where `user` like :user and `password` like :password LIMIT 1",array (':user' => $username, ':password' => sha1($password)));
                $result = $query->fetch(PDO::FETCH_OBJ);

                session_start();
                $_SESSION['id']= $result -> id;
                $_SESSION['name']= $result -> name;
                $_SESSION['lname']= $result -> lastname;
                $_SESSION['user'] = $result -> user;
                $_SESSION['pass']= $password;
                $_SESSION['mail']= $result -> email;
                $_SESSION['status'] = 'Authenticated';  

                echo json_encode($result);
            } else {
                header ('Location: '.URL_BASE.'index.php');
            }
        } else {
         header ('Location: '.URL_BASE.'index.php');
     }
?>