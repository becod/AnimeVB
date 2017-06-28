<?php
    include('../core.php');
    

if(isset($_POST['user']) && isset($_POST['pass'])){
    
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    
    if (isset($username)&&isset($password)){ 
 
                $db = new PDOconnect;
                $query = $db -> queryList("SELECT `ID`,`user_name`,`user_lastname`,`user_login`,`user_email`,`user_status` FROM avb_users WHERE (`user_login` like :user or `user_email` like :user) and `user_password` like :password LIMIT 1",array (':user' => $username, ':password' => sha1($password)));
                $result = $query->fetch(PDO::FETCH_OBJ);

                session_start();
                $_SESSION['id']= $result -> ID;
                $_SESSION['name']= $result -> user_name;
                $_SESSION['lname']= $result -> user_lastname;
                $_SESSION['user'] = $result -> user_login;
                $_SESSION['pass']= $password;
                $_SESSION['mail']= $result -> user_email;
                $_SESSION['status'] = $result -> user_status;  

                echo json_encode($result);
            } else {
                header ('Location: '.URL_BASE.'?view=index');
            }
        } else {
         header ('Location: '.URL_BASE.'?view=index');
     }
?>