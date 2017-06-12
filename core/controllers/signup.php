<?php
    require_once ('../functions/db_connect.php');

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $mail = $_POST['mail'];
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query = new PDOconnect;
    $query -> queryList('Insert into information(name,lastname,user,password,email) values (:name, :lastname, :user, :password, :email)', array(':name' => $name, ':lastname' => $lname, ':user' => $username, ':password' => $password, ':email' => $mail));
    if ($query == true ){
            session_start();
            $_SESSION['name']= $name;
            $_SESSION['lname']= $lastname;
            $_SESSION['mail']= $mail;
            $_SESSION['user'] = $username;
            $_SESSION['pass']= $password;
            $_SESSION['status'] = 'Authenticated';
    } 
    header('location: ../../../home.php');
?>