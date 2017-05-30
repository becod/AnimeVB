<?php
    require_once ('../functions/db_connect.php');

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $mail = $_POST['mail'];
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query = new PDOconnect;
    $query -> queryList('Insert into information(name,lastname,user,password) values (:name, :lastname, :user, :password)', array(':name' => $name, ':lastname' => $lname, ':user' => $username, ':password' => $password));
    
    header('location: ../../../home.php');
?>