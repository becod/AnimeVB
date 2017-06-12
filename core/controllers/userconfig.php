<?php

    require_once ('../functions/db_connect.php');
    session_start();
    
    $name = $_POST['name'];
    $lastname = $_POST['lname'];
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $mail = $_POST['mail'];    

    if(isset($_SESSION)){
        
        $db = new PDOconnect;
        $query = $db -> queryList("UPDATE `information` SET `name`= :name,`lastname`= :lastname,`user`= :user,`password`= :password,`email`= :mail where `user` like :usercooki",array (':name' => $name, ':lastname' => $lastname, ':user' => $username, ':password' => $password, ':mail' => $mail, ':usercooki' => $_SESSION['user']));

        if ($query == true ){
            $_SESSION['name']= $name;
            $_SESSION['lname']= $lastname;
            $_SESSION['mail']= $mail;
            $_SESSION['user'] = $username;
            $_SESSION['pass']= $password;
            $_SESSION['status'] = 'Authenticated';
        }
} header('location: ../../home.php');
?>