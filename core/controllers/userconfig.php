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
        $query = $db -> queryList("UPDATE `avb_users` SET `user_name`= :name,`user_lastname`= :lastname,`user_login`= :user,`user_password`= :password,`user_email`= :mail where `user_login` like :usercooki",array (':name' => $name, ':lastname' => $lastname, ':user' => $username, ':password' => sha1($password), ':mail' => $mail, ':usercooki' => $_SESSION['user']));

        if ($query == true ){
            $_SESSION['name']= $name;
            $_SESSION['lname']= $lastname;
            $_SESSION['mail']= $mail;
            $_SESSION['user'] = $username;
            $_SESSION['pass']= $password;
        }
} header('location: '.URL_BASE.'?view=index');
?>