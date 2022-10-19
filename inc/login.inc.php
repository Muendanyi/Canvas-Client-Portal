<?php

if(isset($_POST)){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    loginUser($conn, $email, $password);
}

