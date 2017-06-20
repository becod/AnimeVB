<?php
    session_start();

    if(isset($_SESSION['user']) && isset($_SESSION['pass'])) {
        if ($_SESSION['user'] != null && $_SESSION['pass'] != null){
            echo 1;
        }else{
            echo 0;
        }
    } else {
        echo 0;
    }

// Que compare en la base de datos si existe el usuario
?> 