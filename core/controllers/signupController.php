<?php
    include('../core.php');

 
if (isset($_POST['name'])&&isset($_POST['lname'])&&isset($_POST['mail'])&&isset($_POST['user'])&&isset($_POST['pass'])){
    
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $mail = strtolower($_POST['mail']);
    $username = strtolower($_POST['user']);
    $password = $_POST['pass'];
    
    
    $query = new PDOconnect;
    $query -> queryList('Insert into information(name,lastname,user,password,email) values (:name, :lastname, :user, :password, :email)', array(':name' => $name, ':lastname' => $lname, ':user' => $username, ':password' => sha1($password), ':email' => $mail));
    if ($query == true ){
            session_start();
            $_SESSION['name']= $name;
            $_SESSION['lname']= $lname;
            $_SESSION['mail']= $mail;
            $_SESSION['user'] = $username;
            $_SESSION['pass']= $password;
            
        $json =  array('name' => $name, 'lastname' => $lname, 'user' =>$username, 'password'=> $password, 'email' => $mail);
        echo json_encode($json);
    }else{
        header('location: '.URL_BASE.'?view=index');
    } 
}else{
    header('location: '.URL_BASE.'?view=index');
}  
?>