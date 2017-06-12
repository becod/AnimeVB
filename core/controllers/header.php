<?php
    session_start();

    if(isset($_SESSION['user']) ) {
        require_once('templates/session/user_header.php');
    } else {
        require_once('templates/session/normal_header.php');
    }
?> 