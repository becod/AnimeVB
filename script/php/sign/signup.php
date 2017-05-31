<?php
    require_once ('../functions/db_connect.php');

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $mail = $_POST['mail'];
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query = new PDOconnect;
    $query -> queryList('Insert into information(name,lastname,user,password,email) values (:name, :lastname, :user, :password, :email)', array(':name' => $name, ':lastname' => $lname, ':user' => $username, ':password' => $password, ':email' => $mail));
    
    header('location: ../../../home.php');
?>