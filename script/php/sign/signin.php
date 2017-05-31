<?php
    require_once ('../functions/db_connect.php');

    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    
 if (isset($username)&&isset($password)) { 
    
    $db = new PDOconnect;
    $query = $db -> queryList("select `user`,`password` from user where `user` like :user and `password` like :password ",array (':user' => $username, ':password' => $password));
    $result = $query->fetch(PDO::FETCH_OBJ);
     
    if($result -> user == $username && $result-> password ==$password){
        $db = new PDOconnect;
        $query = $db -> queryList("select `name`,`lastname`,`user`,`password`,`email` from information where `user` like :user and `password` like :password ",array (':user' => $username, ':password' => $password));
        $result = $query->fetch(PDO::FETCH_OBJ);
        session_start();
        $_SESSION['name']= $result -> name;
        $_SESSION['lname']= $result -> lastname;
        $_SESSION['user'] = $result -> user;
        $_SESSION['pass']= $result -> password;
        $_SESSION['mail']= $result -> email;
        $_SESSION['status'] = 'Authenticated';                  
    }
}   header('location: ../../../home.php');
?>