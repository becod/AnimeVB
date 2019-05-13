<?php
    
    $username = $username;
    $password = sha1($password);
    
    $db = new PDOconnect;
    $query = $db -> queryList("SELECT `ID`,`user_name`,`user_lastname`,`user_login`,`user_password`,`user_email`, `user_status` FORM avb_users WHERE `user_login` like :user AND `user_password` LIKE :password LIMIT 1",array (':user' => $username, ':password' => $password));
    $result = $query->fetch(PDO::FETCH_OBJ);


?>