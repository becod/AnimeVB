<?php
    require_once ('../functions/db_connect.php');

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $mail = $_POST['mail'];
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query = new PDOconnect;
    $query -> queryList("Insert into information(name,lastname,mail,username,password) values ($name, $lname,$mail,$username,$password)",array ("Insert into information(name,lastname,mail,username,password) values ($name, $lname,$mail,$username,$password)"));

    Insert into `information` (information.name, information.lastname,information.mail,information.password, information.username) values ('Benjamin', 'Valencia','benvalencia290@gmail.com','benvalencia','admin')s
   /* $path ='../../logs/user.txt';
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $mail = $_POST['mail'];
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    if (file_exists($path)){
        $file=fopen($path, 'a');
        fwrite($file,"\n".$name.';'.$lname.';'.$mail.';'.$username.';'.$password);
        fclose($file);
        header('location: ../../../home.php');
        
    }*/
?>