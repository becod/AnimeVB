<?php
    require_once ('../model/db_connect.php');

    $username = strtolower($_POST['user']);
    $password = strtolower($_POST['pass']);
 if (isset($username)&&isset($password)) { 
    
    $db = new PDOconnect;
    $query = $db -> queryList("select `user`,`password` from information where `user` like :user and `password` like :password ",array (':user' => $username, ':password' => $password));
    $result = $query->fetch(PDO::FETCH_OBJ);
    
    if($result != null) {
        if($result-> user == $username && $result-> password == $password){
            $db = new PDOconnect;
            $query = $db -> queryList("select `id`,`name`,`lastname`,`user`,`password`,`email` from information where `user` like 'ben_valencia' and `password` like 'admin' ",array (':user' => $username, ':password' => $password));
            $result = $query->fetch(PDO::FETCH_OBJ);

            session_start();
            $_SESSION['id']= $result -> id;
            $_SESSION['name']= $result -> name;
            $_SESSION['lname']= $result -> lastname;
            $_SESSION['user'] = $result -> user;
            $_SESSION['pass']= $result -> password;
            $_SESSION['mail']= $result -> email;
            $_SESSION['status'] = 'Authenticated';  
            
            
            echo json_encode($result);
        } else {
            echo 'No false';
        }
    } else if ( $result == null){
        return false;
    }
    
}else{
     echo ' Not set';
 }
?>