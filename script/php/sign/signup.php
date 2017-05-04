<?php
    $path ='../../logs/user.txt';
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
        
    }
?>