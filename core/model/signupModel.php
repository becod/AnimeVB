<?php

    $name = addslashes($name); 
    $lname = addslashes($lname);
    $mail = addslashes($mail);
    $username = addslashes($username);
    $password = sha1($password);

    $query -> queryList('Insert into information(name,lastname,user,password,email) values (:name, :lastname, :user, :password, :email)', 
              array(':name' => $name, ':lastname' => $lname, ':user' => $username, ':password' => $password, ':email' => $mail));

?>