<?php

    session_start();
    if(isset($_GET['username']){
        $username=$_GET('username');
        $password - $_GET('password');
        $_SESSION['username'] = $username;
        echo "Welcome ".$_SESSION['username'];
    }
?>