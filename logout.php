<?php 
    //init session
    session_start();

    //unset all session values
    $_SESSION = array();

    //DESTROY SESSION
    session_destroy();

    //Redirect to login
    header('location: login.php');
    exit;